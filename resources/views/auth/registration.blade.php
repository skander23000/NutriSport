<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registration</title> 
    <link rel="stylesheet" href="frontend/css/login_registration.css" />
</head>
<body>
    
<main>
   
    <div class="registration_container">
    <form method="post" action="{{route('register-user')}}">
        <h2>Register</h2>
        @if(Session::has('success'))
        <div class="alert">{{Session::get('success')}}</div>
        @endif
        @if(Session::has('fail'))
        <div class="danger">{{Session::get('fail')}}</div>
        @endif
        @csrf
        <div class="holder">
        <input type="text" pattern="[^\s]+" title="Ce champ ne doit pas contenir d'espaces" name="name" placeholder="User Name" value="{{old('name')}}"  autofocus>
        <span >@error('name') {{$message}} @enderror</span>
        </div>
        <div class="holder">
        <input type="text" name="email" placeholder="Email" value="{{old('email')}}" >
        <span >@error('email') {{$message}} @enderror</span>
        </div>
        <div class="holder">
        <input id="password" type="password" name="password" placeholder="Password" value="" class="password">
        <span >@error('password') {{$message}} @enderror</span>
        <button type="button" class="btn btn-outline-secondary eye-icon-registration-1" id="show-password_1">
            &#128065;
        </button>
        </div>
        <div class="holder">
        <input id="password_confirmation" type="password" name="password_confirmation" placeholder="Password confirmation" value="" class="password">
        <span >@error('password') {{$message}} @enderror</span>
        <button type="button" class="btn btn-outline-secondary eye-icon-registration-2" id="show-password_2">
            &#128065;
        </button>
        </div>
        <button type="submit">Register</button>
        <p>Already have an account ? <a href="{{ url('/login') }}">Login</a></p>
    </form>
    </div>
</main>
<script>
 // Crée un tableau de paires d'éléments (input, bouton)
const passwordElements = [
  [document.getElementById('password'), document.getElementById('show-password_1')],
  [document.getElementById('password_confirmation'), document.getElementById('show-password_2')],
];

// Boucle à travers le tableau et ajoute l'événement à chaque paire d'éléments
for (let i = 0; i < passwordElements.length; i++) {
  const passwordInput = passwordElements[i][0];
  const showPasswordButton = passwordElements[i][1];

  showPasswordButton.addEventListener('click', function() {
      if (passwordInput.type === 'password') {
          passwordInput.type = 'text';
      } else {
          passwordInput.type = 'password';
      }
  });
}

</script>
</body>
</html>