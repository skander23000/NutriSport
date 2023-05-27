@extends('frontend.layouts.master_admin')

@section('title','Users')
<head> <link rel="stylesheet" href="frontend/css/admin/user.css"/></head> 
@section('content')

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

<main>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1 class="title">List of users</h1>
                <table class="table">
        <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Created_at</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
                <tr>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->created_at }}</td>
                
                    <td>
                        <form action="{{ route('users.edit', $user->id) }}" class="user_form">
                           <button type="submit"  class="btn btn-sm btn-primary">update</button>
                        </form>
                        
                        <form action="{{ route('users.destroy', $user->id) }}" method="POST" class="user_form">
                            @csrf
                            @method('DELETE')
                            <button type="submit"  class="btn btn-sm btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <a href="{{ route('users.create') }}" class="btn btn-primary add_btn">Add a new user</a>
</div>
</div>
</div>

</main>

@endsection


 



