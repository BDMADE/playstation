<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Games Collection</title>
    <link rel="stylesheet" href="{{asset('assets/bootstrap/css/bootstrap.min.css') }}" />
</head>
<body>
<div class="container">
    <nav class="navbar navbar-default" role="navigation">
        <div class="navbar-header">
            <a href="{{ action('GamesController@index') }}" class="navbar-brand">Games Collection</a>
            <a href="{{ action('UserController@index') }}" class="navbar-brand">CreateUser</a>
			@if(Auth::check())
			
			<a href="{{ action('UserController@crush') }}" class="navbar-brand">Admin</a>
			
			<a href="{{ action('UserController@logout') }}" class="navbar-brand">logout</a>
			
			
			
			@endif
			
			@if(Auth::guest())

			<a href="{{ action('UserController@login') }}" class="navbar-brand">login</a>	
			
			@endif
			
			
        </div>
    </nav>
    @yield('content')
</div>

</body>

</html>