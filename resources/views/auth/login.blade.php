<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background: url('{{ asset('frontend/assets/images/background/slidernew7.jpg') }}') no-repeat center center fixed;
            background-size: cover;
            color: #fff;
        }
        .page-title {
            background: rgba(0, 0, 0, 0.9);
            padding: 100px 0;
            text-align: center;
        }
        .page-title h2 {
            font-size: 36px;
            font-weight: 700;
            margin-bottom: 10px;
        }
        .page-breadcrumb {
            list-style: none;
            padding: 0;
            margin: 0;
            display: flex;
            justify-content: center;
        }
        .page-breadcrumb li {
            margin: 0 5px;
        }
        .page-breadcrumb a {
            color: #fff;
            text-decoration: none;
        }
        .register-section {
            padding: 60px 0;
        }
        .sec-title h2 {
            font-size: 28px;
            font-weight: 700;
            margin-bottom: 30px;
            color: #333;
        }
        .styled-form {
            background: rgba(255, 255, 255, 0.9);
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
            color: #333;
        }
        .form-group {
            position: relative;
            margin-bottom: 20px;
        }
        .form-group .adon-icon {
            position: absolute;
            left: 15px;
            top: 50%;
            transform: translateY(-50%);
            color: #999;
        }
        .form-group input {
            width: 100%;
            padding: 10px 15px 10px 45px;
            border: 1px solid #ddd;
            border-radius: 4px;
        }
        .theme-btn {
            background: #D9AC58;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        .theme-btn:hover {
            background: #0056b3;
        }
        .invalid-feedback {
            display: block;
            color: red;
        }
        .remember-me {
            color: #333;
        }
    </style>
</head>
<body>
    <!-- Page Title -->
    <section class="page-title">
        <div class="container">
            <h2>Habtamu Tibebe</h2>
            <ul class="page-breadcrumb">
                <li><a href="/">home</a></li>
                <li>Start Your Session</li>
            </ul>
        </div>
    </section>
    <!-- End Page Title -->
    
    <!-- Register Section -->
    <section class="register-section">
        <div class="container">
            <div class="row justify-content-center">
                
                <!-- Form Column -->
                <div class="col-lg-6 col-md-12 col-sm-12">
                    <div class="sec-title text-center">
                        <h2>Login Now</h2>
                    </div>
                    <!-- Login Form -->
                    <div class="styled-form login-form">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <div class="form-group">
                                <span class="adon-icon"><span class="fa fa-envelope-o"></span></span>
                                <input type="email" name="email" placeholder="Email Address*" required>
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <span class="adon-icon"><span class="fa fa-unlock-alt"></span></span>
                                <input type="password" name="password" placeholder="Enter Password" required>
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="clearfix">
                                <div class="form-group pull-left">
                                    <input type="submit" class="theme-btn btn-style-three" value="Login Now">
                                </div>
                            </div>
                            <div class="clearfix">
                                <div class="pull-left">
                                    <input type="checkbox" id="remember-me" name="remember">
                                    <label class="remember-me" for="remember-me"> Remember Me</label>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- End Form Column -->
                
            </div>
        </div>
    </section>
    <!-- End Register Section -->
</body>
</html>
