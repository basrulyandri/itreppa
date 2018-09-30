<!DOCTYPE html>
<html lang="en" >

<head>
    <meta charset="UTF-8">
    <title>{{getOption('site_name')}} | Login</title>
    <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Open+Sans'>
    <link rel="stylesheet" href="{{url('assets/frontend/login-page')}}/css/style.css">
</head>

<body>
    <div class="cont">
        <div class="form sign-in">
            <h2>SELAMAT DATANG</h2>
            <form method="POST" class="m-t" role="form" action="{!!route('auth.dologin')!!}" method="post">
            {{csrf_field()}}
                <label>
                    <span>Email</span>
                    <input type="email" name="email" />
                </label>
                <label>
                    <span>Password</span>
                    <input type="password" name="password" />
                </label>
                <!-- <p class="forgot-pass">Forgot password?</p> -->
                <button type="submit" class="submit">Login</button>                
            </form>
        </div>
            <div class="sub-cont">
                <div class="img">
                    <div class="img__text m--up">
                        <h2>New here?</h2>
                        <p>Sign up and discover great amount of new opportunities!</p>
                    </div>
                    <div class="img__text m--in">
                        <h2>One of us?</h2>
                        <p>If you already has an account, just sign in. We've missed you!</p>
                    </div>
                    <div class="img__btn">
                        <span class="m--up">Sign Up</span>
                        <span class="m--in">Sign In</span>
                    </div>
                </div>
            </div>
        <div class="form sign-up">
            <h2>Time to feel like home,</h2>
            <label>
                <span>Name</span>
                <input type="text" />
            </label>
            <label>
                <span>Email</span>
                <input type="email" />
            </label>
            <label>
                <span>Password</span>
                <input type="password" />
            </label>
            <button type="button" class="submit">Sign Up</button>
            <button type="button" class="fb-btn">Join with <span>facebook</span></button>
        </div>
    </div>
</div>

<script  src="{{url('assets/frontend/login-page')}}/js/index.js"></script>
</body>

</html>

