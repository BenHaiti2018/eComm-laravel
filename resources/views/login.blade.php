@extends('master')
@section("content")
    <div class="container">
        <div class="row justify-content-center custom-login ">
        <div class="col-sm-4">
            <form action="login" method="POST">
                <div class="form-group">
                    @csrf
                  <label for="exampleInputEmail1">Email address</label>
                  <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Password</label>
                  <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                </div>
                <button type="submit" class="btn btn-primary">Login</button>
              </form>    
        </div>
        </div>
    </div>
@endsection
