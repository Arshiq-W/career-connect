<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up Form</title>
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
        .signup-container {
            background-color: #f4eae5;
            padding: 40px;
            border-radius: 20px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.2);
            max-width: 450px;
            width: 100%;
            text-align: center;
        }
        .signup-container h2 {
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
        .signup-btn {
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
        .signup-btn i {
            margin-right: 10px;
        }
        .login-link {
            margin-top: 15px;
            font-size: 0.9rem;
        }
        .login-link a {
            font-weight: bold;
            text-decoration: none;
            color: #000;
        }
    </style>
</head>
<body>

<div class="signup-container">
    <h2>Sign Up</h2>
    <form method="POST" action="{{ route('register') }}">
                        @csrf

        <div class="row g-3">
            <div class="col-md-6">
                <input type="text" name="first_name" class="form-control" placeholder="First Name...">
                @error('first_name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="col-md-6">
                <input type="text" name="last_name" class="form-control" placeholder="Last Name...">
                @error('last_name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>
        <div class="mt-3">
            <input type="email" name="email" class="form-control" placeholder="Email...">
            @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
        </div>
        <div class="mt-3 input-group">
            <input type="password" name="password" class="form-control" placeholder="Password">
            <span class="input-group-text"><i class="bi bi-eye"></i></span>
            @error('last_name')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="mt-3 input-group">
            <input type="password" name="password_confirmation" class="form-control" placeholder="Confirm Password">
            <span class="input-group-text"><i class="bi bi-eye"></i></span>
            @error('last_name')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <!-- <div class="mt-3 d-flex align-items-center">
            <input type="checkbox">
            <span class="checkbox-label">Remember Me</span>
        </div> -->
        <div class="mt-4">
            <button type="submit" class="btn signup-btn w-100">
                <i class="bi bi-arrow-right-circle"></i> Sign Up
            </button>
        </div>
        <div class="login-link">
            Already have an account? <a href="{{route('login')}}">Login</a>
        </div>
    </form>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.10.2/font/bootstrap-icons.min.js"></script>
</body>
</html>
