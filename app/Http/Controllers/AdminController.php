<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\User;
use App\Models\Order;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\Configuration;
use App\Mail\PasswordResetMail;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;

class AdminController extends Controller
{
    // DASHBOARD
    public function dashboard(){
        $ordersForChart = DB::table('orders')
            ->whereRaw('YEAR(created_at) = YEAR(CURRENT_DATE())')
            ->select(DB::raw('MONTH(created_at) as month'), DB::raw('count(*) as orders_count'))
            ->groupBy('month')
            ->get()
            ->toArray();

        $earningsForChart = DB::table('orders')
            ->whereRaw('YEAR(created_at) = YEAR(CURRENT_DATE())')
            ->select(DB::raw('MONTH(created_at) as month'), DB::raw('sum(total) as revenue'))
            ->groupBy('month')
            ->get()
            ->toArray();

        $counts = [
            'customers' => DB::table('users')->where('role', 0)->count(),
            'products' => DB::table('products')->count(),
            'categories' => DB::table('categories')->count(),
            'deliveryMen' => DB::table('users')->where('role', 1)->count(),
            'orders' => DB::table('orders')->count(),
            'testimonials' => DB::table('testimonials')->count(),
            'bookings' => DB::table('bookings')->count(),
            'earnings' => DB::table('orders')->where('status', '!=', 'canceled')->sum('total'),
        ];

        return view('admin.dashboard', [
            'ordersChart'=>$ordersForChart,
            'earningsChart' => $earningsForChart,
            'counts' => $counts
        ]);
    }

    // SHOW LOGIN FORM
    public function loginForm(){
        return view('admin.auth.login');
    }

    // SHOW SIGNUP FORM
    public function signupForm () {
        return view('admin.auth.signup');
    }
    
    // SIGNUP
    public function signup (Request $request) {
        $data = $request->validate([
            'name'=> 'required',
            'email'=> 'required|email|unique:users,email',
            'password'=> 'required|confirmed',
        ]);

        $user = User::create([
            'name'=> $data['name'],
            'email'=> $data['email'],
            'password'=> bcrypt($data['password']) ,
            'role'=> 2,
        ]);
        
        $token = $user->createToken('admin_token', ['everything']);
        $user->save();

        // dd(Auth::user());
        Auth::login($user); 
        return redirect('/admin');
        
    }

    // LOGIN
    public function login (Request $request) {
        $credentials = $request->validate([
            'email'=> 'required|email',
            'password'=> 'required',
        ]);

        if (Auth::attempt($credentials)){
            $user = Auth::user();
            // check if the user is an admin
            if($user->role == 2){
                return redirect('/admin');
            }else{
                return redirect('/');
            }
            
        }else{
            return redirect()->back()->with('error', 'Wrong email address or password');
        }
    }

    // LOGOUT
    public function logout (Request $request) {
        if (Auth::user()){
            Auth::logout();
            return redirect('/admin');
        }
        return redirect()->back();
    }

    // LIST OF ADMINS
    public function list () {
        return view('admin.auth.list');
    }

    // WEBSITE CONFIGURATION
    public function config () {
        return view('admin.auth.config');
    }

    // SAVE CONFIGURATION
    public function configure (Request $request) {
        $logo = DB::table('configuration')->pluck('logo')->first();
        $config = Configuration::first();

        $fields = $request->validate([
            'name'=> 'required|max:32|min:2',
            'city'=> 'required|max:28|min:3',
            'address'=> 'required|max:128|min:3',
            'email'=> 'required|email',
            'phone'=> 'required|max:12',
            'primary_color'=> 'required',
            'secondary_color'=> 'required',
            'slogan'=> 'required|max:128|min:3',
            'description'=> 'max:256',
            'logo' => 'mimes:png,jpg,jpeg|max:5000',
        ], [
            'logo.mimes' => 'Please upload an image of type png, jpg or jpeg.',
        ]);

        // making sure not to set logo to null in db if the user didn't upload it
        if($logo && !$request->logo){
            $fields['logo'] = $logo;
        }

        // update the logo in the public folder with the new one
        if($request->logo){
            // check public folder for the file if exists to delete it 
            if(File::exists($config->logo)){
                File::delete($config->logo
        );
            }
            $uniqueLogoName =  time().'-'.$request->name. '.' .$request->logo->extension();
            $request->logo->move(public_path('uploads'), $uniqueLogoName);
            $fields['logo'] = 'uploads/' . $uniqueLogoName;
        }

        $config->update($fields);

        return redirect()->back()->with('success', 'Infomations successfully updated');
    }

    // shows a form to send to enter the email
    public function forgotPasswordForm (){
        return view('password.forgot-password');
    }
    
    // send the email with the link to reset password
    public function sendResetPasswordMail (Request $request) {
        // validate email
        $request->validate([
            'email' => 'required|email'
        ]);

        $user = DB::table('users')->where('email', $request->email)->first();
        // if user does not exist
        if(!$user){
            return redirect()->back()->with('error', 'Email was not found');
        }

        // delete token if it has already been created then create a new one
        $token = DB::table('password_reset_tokens')->where('email', $request->email)->first();
        if($token){
            DB::table('password_reset_tokens')->where('email', $request->email)->delete();
        }

        // generate unique token for reset pwd url
        $token = Str::random(60);
        
        DB::table('password_reset_tokens')->insert([
            'email' => $user->email,
            'token' => $token,
            'created_at' => Carbon::now(),
        ]);

        // send email
        Mail::to($request->email)->send(new PasswordResetMail($token));

        return redirect()->back()->with('success', 'a password reset link was sent to your email');
    }

    // show the form to reset password
    public function resetPasswordForm ($token){
        $reset = DB::table('password_reset_tokens')->where('token', $token)->first();

        if(!$reset){
            abort(404);
        }

        return view('password.reset-password', ['token' => $token]);
    }

    // reset the password
    public function resetPassword (Request $request){
        // validate the request data
        $request->validate([
            'token' => 'required',
            'email' => 'required|email',
            'password' => 'required|confirmed'
        ]);

        $reset = DB::table('password_reset_tokens')
                ->where('email', $request->email)
                ->where('token', $request->token)
                ->first();

        if (!$reset) {
            abort(404);
        }

        $user = User::where('email', $request->email)->first();

        // verify the user
        if (!$user) {
            return redirect()->back()->with('error', 'No user was found with that email address');
        }

        // verify the password reset token
        if ($reset->token != $request->token) {
            return redirect()->back()->with('error', 'Invalid password reset token.');
        }

        // reset the user's password
        $user->update(['password' => Hash::make($request->password)]);

        // delete password reset token after reset
        DB::table('password_reset_tokens')->where('email', $request->email)->delete();

        // redirect to the login page with a success message
        return redirect()->route('admin.login')->with('success', 'Your password has been reset!');
    }

}
