@extends('master')
@section("content")
<div class="container custom-login">
    <div class="row">
        <div class="col-sm-4 col-sm-offset-4" >
            <form action="console" method="POST">
            @csrf
            <div class="form-group">
                <label for="examplename">Username</label>
                <input type="text" name="username" class="form-control" placeholder="Enter username"/> <br>
                
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password"><br>    
            </div>
            <button type="submit" class="btn btn-primary">Login</button>
            </form>
        </div>
    </div>
</div>
@endsection