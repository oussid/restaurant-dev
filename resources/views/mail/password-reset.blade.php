<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <style>
        /* @import url('https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400;500;600;700&family=Poppins:wght@400;500;600;700;800;900&family=Roboto:wght@500&display=swap');

*{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Poppins', sans-serif ;
}

.email-container{
    min-width: 100%;
    min-height: 100vh;
    background: #A6D0DD;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    gap: .8rem;
}

.email-container .email{
    width: 500px;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    background: #fff;
    border-radius: 6px;
    box-shadow: rgba(0, 0, 0, 0.16) 0px 10px 36px 0px, rgba(0, 0, 0, 0.06) 0px 0px 0px 1px;;
    padding: .6rem 1rem;
    
}

.email-main{ 
    display: flex;  
    flex-direction: column;
    align-items: center;
    justify-content: center;
    text-align: center;
    gap: .8rem;
    padding-top: 1rem;
}

.email-title{
    color: #01112B;
}

.email-text{
    color: #495067;
    font-size: .9rem;
}

.email-text.smaller{
    color: #495067;
    font-size: .7rem;
}

.email-btn{
    outline: none;
    border: 1px solid #01112B;
    background: #01112B;
    color: #fff;
    border-radius: 6px;
    width: 100%;
    padding: .3rem;
    font-size: 1.02rem;
    cursor: pointer;
    transition: .3s all;
}

.email-btn:hover{
    background: #021c46;
} */
    </style>
    <title>Document</title>
</head>
<body>
    <div class="email-container">
        no css yet
        <div class="email-logo">
            <h2>{{$config->name}}</h2>
        </div>
        <div class="email">
           <div class="email-top">
                <img src="{{asset('images/forgot-pwd.png')}}" alt="">
           </div>
           <div class="email-main">
                <h3 class="email-title">Forgot Your Password?</h3>
                <p class="email-text">You requested to reset the password for your account. Please click the button bellow to reset your password.</p>
                <a href="{{$resetUrl}}">
                    <button class="email-btn">Reset</button>    
                </a>
                <p class="email-text smaller">If you did not request a password reset, please feel free to ignore this message.</p>
           </div>
        </div>
    </div>
</body>
</html>
