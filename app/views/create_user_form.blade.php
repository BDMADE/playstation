@extends('layout')
@section('content')

<form action="{{ action('UserController@handleCreate') }}" method="post" role="form">
    <div class="form-group">
    <p><label for="username">Username:</label></p>
    <p><input type="text" name="username" class="form-control required" placeholder="Username" /></p>
    </div>
    <div class="form-group">
    <p><label for="email">Email:</label></p>
    <p><input type="email" name="email"  class="form-control required" placeholder="Email" /></p>
     </div>

    <div class="form-group">
    <p><label for="password">Password:</label></p>
    <p><input type="password" name="password" class="form-control required" placeholder="Password" /></p>
    </div>
    <p><input type="submit" value="Create"   class="btn btn-primary"/></p>
</form>
@stop