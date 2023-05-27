@extends('frontend.layouts.master_admin')

@section('title','Users')
<head><link rel="stylesheet" href="{{ asset('frontend/css/admin/create.css') }}?{{ time() }}" />  </head>
@section('content')


<main>
    <div class="container">
    <form action="{{ route('users.store') }}" method="POST">
            <h1>Add a new user</h1><br>
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

    @csrf
    <div class="form-group">
               <label for="name">Name:</label>
               <input type="text" name="name" placeholder="Name" id="name" class="form-control">
    </div>
    <div class="form-group">
               <label for="email">e-mail address:</label>
               <input type="email" name="email" placeholder="email" id="email" class="form-control">
    </div>
    <div class="form-group">
        <label for="password">Password:</label>
        <div style="position: relative;">
            <input type="password" name="password" placeholder="password" id="password" class="form-control">
            <div class="input-group-append">
                <button type="button" class="btn btn-outline-secondary eye-icon" id="show-password">
                    &#128065;
                </button>
              </div>
        </div>
    </div>
           <button type="submit" >Add </button>
</form>
    </div>    

</head>
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
</main>

@endsection

