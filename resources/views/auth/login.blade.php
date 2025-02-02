<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #1c1c1a;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            font-family: Arial, sans-serif;
        }
        .login-container {
            background-color: #f4eae5;
            padding: 40px;
            border-radius: 20px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.2);
            max-width: 400px;
            width: 100%;
            text-align: center;
        }
        .login-container h2 {
            font-size: 2.5rem;
            font-weight: bold;
            margin-bottom: 20px;
            text-shadow: 2px 2px 4px rgba(0,0,0,0.2);
        }
        .form-control {
            border-radius: 10px;
            border: none;
            padding: 15px;
            font-size: 1rem;
        }
        .input-group-text {
            background-color: transparent;
            border: none;
            cursor: pointer;
        }
        .checkbox-label {
            font-size: 0.9rem;
            margin-left: 5px;
        }
        .login-btn {
            border-radius: 50px;
            padding: 15px;
            font-size: 1.2rem;
            font-weight: bold;
            border: none;
            background-color: #000;
            color: #fff;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .login-btn i {
            margin-right: 10px;
        }
        .signup-link {
            margin-top: 15px;
            font-size: 0.9rem;
        }
        .signup-link a {
            font-weight: bold;
            text-decoration: none;
            color: #000;
        }
        .forgot-password {
            float: right;
            font-size: 0.9rem;
            color: #000;
            text-decoration: none;
            font-weight: bold;
        }
    </style>
</head>
<body>

<div class="login-container">
    <h2>Login</h2>
    <form method="POST" action="{{ route('login') }}">
                        @csrf
        <div class="mb-3">
            <input id="email" type="email"  class="form-control @error('email') is-invalid @enderror" placeholder="Email" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            <small class="text-muted">Please enter your email.</small>
        </div>
        <div class="mb-3 input-group">
            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" placeholder="Password" name="password" required autocomplete="current-password">

            @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
            <span class="input-group-text"><i class="bi bi-eye"></i></span>
        </div>
        <small class="text-muted">Please enter your password.</small>
        
        <div class="mt-3 d-flex justify-content-between align-items-center">
            <div>
            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                <label for="remember" class="checkbox-label"> Remember Me</label>
            </div>
            @if (Route::has('password.request'))
                <!-- <a class="btn btn-link" href="{{ route('password.request') }}">
                    {{ __('Forgot Your Password?') }}
                </a> -->
                <a href="{{ route('password.request') }}" class="forgot-password">Forget password?</a>
            @endif
        </div>
        
        <div class="mt-4">
            <button type="submit" class="btn login-btn w-100">
                <i class="bi bi-arrow-right-circle"></i> Login
            </button>
        </div>
        <div class="signup-link">
            Don't have an account? <a href="{{route('register')}}">signUp</a>
        </div>
    </form>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.10.2/font/bootstrap-icons.min.js"></script>
</body>
</html>

