<?php

class UserController extends BaseController{

public function index(){

    return View::make('create_user_form');

}

public function handleCreate(){

    $user = new User;
    $user->username = Input::get('username');
    $user->password = Hash::make(Input::get('password'));
    $user->email = Input::get('email');
    $user->save();
    return Response::make('User created! Hurray!');

}

public function crush(){
if (Auth::guest()) 
{return Redirect::to('/login');}

else{

	$data='welcome To '.Auth::user()->username;
    return View::make('crush');
	

}



}

public function login(){

    return View::make('login_form');

}


public function handleLogin(){

    $credentials = Input::only('username', 'password');
    $remember = Input::has('remember');
    if (Auth::attempt($credentials, $remember)) {
        return Redirect::intended('/crush');
    }
    return Redirect::action('UserController@login');


}

public function logout(){
 Auth::logout();
    return View::make('login_form');;

}


}