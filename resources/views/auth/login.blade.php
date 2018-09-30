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
            <a class="login-logo" href="{{route('page.index')}}"><img src="{{asset('assets/frontend')}}/corporate/img/logos/logo-apperti.png" alt="{{getOption('site_name')}} | {{getOption('site_description')}}"></a>               
        </div>
            <div class="sub-cont">
                <div class="img">
                    <div class="img__text m--up">
                        <h2>APPERTI</h2>
                        <p>Aliansi Penyelenggara Perguruan Tinggi Indonesia</p>
                    </div>                    
                </div>
            </div>        
    </div>
</div>

<script  src="{{url('assets/frontend/login-page')}}/js/index.js"></script>
</body>

</html>

