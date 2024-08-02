<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Gnmarine</title>
    <style>
        .login-page{
            height: 92vh;
            display: flex;
            justify-content: center;
            flex-direction: column;
            align-items: center;
            position: relative;
            top: 0px;
            left: 0px;
            transform: translate(0%, -7%);
        }

        .login-page .top-form-login{
            display: flex;
            flex-direction: column;
            align-items: center;
            width: 100%;
            margin-bottom: 10px;
        }

        .login-page .top-form-login h2{
            font-size: 32px;
        }

        .login-page .form-login{
            width: 400px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            gap: 10px;
            margin-bottom: 10px;
        }

        .login-page .form-login > div{
            position: relative;
            display: flex;
            flex-direction: column;
            justify-content: center;
            width: 100%;
        }

        .login-page .form-login .login-input{
            display: block;
            width: 95%;
            height: 23px;
            padding-top: 20px;
            padding-left: 10px;
            border: 1px solid #ccc;
            border-radius: 8px;
            outline: none;
            transition: 0.3s ease;
        }

        .login-page .form-login .login-input--error{
            display: block;
            width: 95%;
            height: 23px;
            padding-top: 10px;
            padding-bottom: 10px;
            padding-left: 10px;
            border: 1px solid red;
            border-radius: 8px;
            outline: none;
            transition: 0.3s ease;
        }

        .login-page .form-login .invalid-feedback{
            color: red;
        }

        .login-page .form-login .login-input:focus{   
            border-color: #6a5af9;
            box-shadow: 0 0 0 2px #fff, 0 0 0 4px #0e72ed;
        }

        .login-page .form-login .login-input:focus + .label-login-input, .login-page .form-login .login-input:not(:placeholder-shown) + .label-login-input{
            top: 25%;
            font-size: 12px;
        }

        .login-page .form-login .label-login-input{
            position: absolute;
            top: 50%;
            transform: translate(0%, -50%);
            left: 12px;
            color: #636262cc;
            cursor: text;
            transition: 0.2s ease;
        }

        .login-page .form-login .btn-submit{
            width: 98.5%;
            color: #fff;
            border: none;
            outline: none;
            background: #0e72ed;
            padding: 8px 16px;
            font-size: 16px;
            border-radius: 10px;
            line-height: 24px;
            cursor: pointer;
            transform: translate(-3px, 0px);
        }

        .login-page .form-login .btn-submit:hover{
            background: #0956b5;
        }

        .bottom-form-login{
            display: flex;
            flex-direction: column;
            align-items: center;
            width: 100%;
        }

        @media (min-width: 1401px) {
            .login-page .top-form-login{
                
            }
        }

        @media (max-width: 1400px) {
            .login-page h2{
                
            }
        }

        @media (max-width: 1200px) {
            .login-page h2{
                
            }
        }

        @media (max-width: 992px) {
            .login-page h2{
                
            }
        }

        @media (max-width: 768px) {
            .login-page .form-login{
                width: 80%;
            }

            .login-page .form-login .btn-submit{
                width: 98%;
                transform: translate(-5px, 0px);
            }

            .login-page .top-form-login{
                font-size: 15px;
            }

            .login-page .bottom-form-login{
                font-size: 15px;
            }

            .login-page .form-login .invalid-feedback{
                font-size: 15px;
            }
        }

        @media (max-width: 576px) {
            .login-page .form-login{
                width: 90%;
            }

            .login-page .form-login .btn-submit{
                width: 99%;
                transform: translate(-1px, 0px);
            }

            .login-page .top-form-login{
                font-size: 14px;
            }

            .login-page .bottom-form-login{
                font-size: 14px;
            }

            .login-page .form-login .invalid-feedback{
                font-size: 13px;
            }
        }
    </style>
</head>
<body>
<div class="login-page">
    @guest
    <div class="top-form-login">
        <h2> Login </h2>
        <span>
            GN Marine Online Database
        </span>
        <span>
            The Online Database for GN Marine Serviced Vessels
        </span> 
    </div>

    <form method="POST" action="{{ route('login') }}" class="form-login">
        @csrf
        <div class="">
            @error('email')
            <input type="email" id="email" name="email" class="login-input--error" placeholder="Enter email" required />
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @else            
            <input type="email" id="email" name="email" class="login-input" placeholder=" " required />
            <label for="email" class="label-login-input">Enter email</label>
            @enderror
        </div>
        <div class="">
            @error('email')
            <input type="password" id="password" name="password" placeholder="Enter password" class="login-input--error" required />
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @else
            <input type="password" id="password" name="password" placeholder=" " class="login-input" required />
            <label for="password" class="label-login-input">Enter password</label>
            @enderror
        </div>
        <button type="submit" class="btn-submit">
            Login
        </button>
    </form>
    <div class="bottom-form-login">
        <span>
            By signing in, I agree to the GN Marine's
        </span>
        <span>
            privacy statement and Terms of Service
        </span> 
    </div>
    @else
        <h3>You are Logged</h3>
        <a href="{{route('search')}}" class="">Go to next page</a>
    @endguest
</div>
</body>
</html>


