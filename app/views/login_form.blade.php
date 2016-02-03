@extends('layout')
@section('content')
<form action="{{ action('UserController@handleLogin') }}" method="post" role="form">
    <p><label for="username">Username:</label></p>
    <p><input type="text" name="username" placeholder="Username" /></p>
    <p><label for="password">Password:</label></p>
    <p><input type="password" name="password" placeholder="Password" /></p>
    <p><input type="submit" value="Login" /></p>
    <p><input type="checkbox" name="remember" /> <label for="remember">Remember me.</label></p>
</form>

@stop