<?php

namespace App\Http\Controllers;

use App\Models\Table;
use Illuminate\Http\Request;

class TableController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.table.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.table.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $fields = $request->validate([
            'number' => 'required|max:6|unique:tables,number',
            'floor' => 'required|max:24',
            'position' => 'required|max:56',
        ]);

        Table::create($fields);

        return redirect()->back()->with('success' , 'Table created');
    }

    /**
     * Display the specified resource.
     */
    public function show(Table $table)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Table $table)
    {
        return view('admin.table.edit', ['table' => $table]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Table $table)
    {
        // because the number column must be unique
        $numberValidation;
        if($table->number === $request->number){
            $numberValidation = 'required|max:6';
        }else{
            $numberValidation = 'required|max:6|unique:tables,number';
        }

        $fields = $request->validate([
            'number' => $numberValidation,
            'floor' => 'required|max:24',
            'position' => 'required|max:56',
        ]);

        $table->update($fields);
        return redirect()->back()->with('success' , 'Table updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Table $table)
    {
        $table->delete();
        return redirect()->back()->with('success', 'Table deleted');
    }
}
