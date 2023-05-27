<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link rel="stylesheet" href="frontend/css/login_registration.css" />
</head>
<body>
   
<main>
    <div class="login_container">
        <form method="post" action="{{route('login-user')}}">
            @csrf
            <h2>Login</h2>
            @if(Session::has('success'))
            <div class="alert">{{Session::get('success')}}</div>
            @endif
            @if(Session::has('fail'))
            <div class="danger">{{Session::get('fail')}}</div>
            @endif
            <div class="holder">
            <input type="text" name="email" placeholder="Email" value="{{old('email')}}" autofocus>
            <span >@error('email') {{$message}} @enderror</span>
            </div>
            <div class="holder">
            <input type="password" name="password" placeholder="Mot De Passe" id="password">
            <span >@error('password') {{$message}} @enderror</span>
            <button type="button" class="btn btn-outline-secondary eye-icon-login" id="show-password">
                &#128065;
            </button>
            </div>
            <button type="submit">Login</button>
            <p>Don't have an account ? <a href="{{ url('/registration') }}">Register</a></p>
        </form>
    </div>
 
</main>
<script>
    const passwordInput = document.getElementById('password');
    const showPasswordButton = document.getElementById('show-password');

    showPasswordButton.addEventListener('click', function() {
        if (passwordInput.type === 'password') {
            
            passwordInput.type = 'text';
        } else {
            passwordInput.type = 'password';
           
        }
    });
</script>
</body>

</html>
