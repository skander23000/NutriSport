@extends('frontend.layouts.master_admin')

@section('title','Users')
<head><link rel="stylesheet" href="{{ asset('frontend/css/admin/edit.css') }}?{{ time() }}" /> </head>
@section('content')
 

<html>
<head>
    <meta charset="UTF-8">
    <title>User Update</title>
    <link rel="stylesheet" href="{{ asset('frontend/css/admin/edit.css') }}?{{ time() }}" />  
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-P8MCVsa1XJZ59UiV2QJlxF8c5l1KLy/mn+oQYakmD5h5m5XnFW5RN5a+GhD1rHa3qggwu/gPwzYdeNXX6PGcQ==" crossorigin="anonymous" />
</head>
<body>
    <main>
        <div class="container">
                        
    
            <div class="panel-body">
                
                <form class="form-horizontal" method="POST" action="{{ route('users.update', $user->id) }}">
                    <h2>Update a user</h2>
                    @if ($errors->any())
                                    <div class="alert alert-danger">
                                        <ul>
                                      @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                      @endforeach
                                       </ul>
                                    </div>
                    @endif
                    {{ csrf_field() }}
                    {{ method_field('PUT') }}
    
                
    
                    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                        <label for="email" class="col-md-4 control-label">e-mail Address</label>
    
                        <div class="col-md-6">
                            <input id="email" type="email" class="form-control" name="email" placeholder="e-mail" value="{{ $user->email }}" required>
    
                            @if ($errors->has('email'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
    
                    <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                        <label for="password" class="col-md-4 control-label">New Password</label>
                    
                        <div style="position: relative;">
                            <input id="password" type="password" placeholder="Password"class="form-control" name="password">
                            <div class="input-group-append">
                                <button type="button" class="btn btn-outline-secondary eye-icon" id="show-password">
                                    &#128065;
                                </button>
                            </div>
                        </div>
                    </div>
                    
                    <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                        <label for="password_confirmation" class="col-md-4 control-label">Confirm The Password</label>
                    
                        <div style="position: relative;">
                            <input id="password_confirmation" type="password" class="form-control" name="password_confirmation" placeholder="Password Confirmation">
                            <div class="input-group-append">
                                <button type="button" class="btn btn-outline-secondary eye-icon" id="show-password_1">
                                    &#128065;
                                </button>
                            </div>
                        </div>
                    </div>
    
                    <div class="form-group">
                        <div class="col-md-6 col-md-offset-4">
                            <button type="submit" class="btn btn-primary">
                                Update
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        
    </div>
    </body>
    <script>
    const passwordInput = document.getElementById('password');
    const showPasswordButton = document.getElementById('show-password');
    // Crée un tableau de paires d'éléments (input, bouton)
    const passwordElements = [
      [document.getElementById('password'), document.getElementById('show-password')],
      [document.getElementById('password_confirmation'), document.getElementById('show-password_1')],
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
    
    </main>

</html>

@endsection