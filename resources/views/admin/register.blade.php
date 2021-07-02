@extends('master')

@section('content')
    <h1>Register</h1>

    <div class="card">
        <div class="card-body">
             <form action="{{route("admin.created")}}" method="POST">
                {{ csrf_field() }}
                 <div class="form-group">
                      <label for="">Full Name</label>
                      <input type="text" class="form-control" name="username" id="">
                 </div>
                 <div class="form-group">
                      <label for="">Email</label>
                      <input type="text" class="form-control" name="email" id="">
                 </div>
                 <div class="form-group">
                      <label for="">Password</label>
                      <input type="text" class="form-control" name="password" id="">
                 </div>
                 <div class="form-group">
                     <button class="btn btn-primary">Register</button>
                 </div>
             </form>
        </div>
    </div>

@endsection