<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Laravel | B. Bulpett</title>
	 <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <meta http-equiv="X-UA-Compatible" content="IE=edge"> 

     {{ HTML::style('css/bootstrap.css') }}
     {{ HTML::style('css/bootstrap-theme.css') }}
     {{ HTML::style( asset('css/main.css') ) }}
</head>

<body>
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" style="background: #555;">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          {{ HTML::image('images/books_logo.png', 'a picture of books', array('class' => 'logo')) }}
          <a class="navbar-brand" href="{{{ URL::to('') }}}">Laravel Project - Barnabas Bulpett</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav navbar-right laravelNavLinks" style="margin-right: 60px;">
            <?php if (Auth::check()) {?>
            <li class="active">Hi, {{ Confide::user()->username }}</li>
            <li class="active"><a href="{{{ URL::to('users/logout') }}}">Logout</a></li>
            </ul>
            <?php }else{?>
            <li class="active"><a href="{{{ URL::to('users/login') }}}">Login</a></li>
            <li class="active"><a href="{{{ URL::to('users/create') }}}">Register<span class="sr-only"></span></a></li>
            </ul>
            <?php } ?>
        </div>
      </div>
    </nav>
        <div id="mainContent">
            @yield('content')
        </div>
{{ HTML::script('js/jquery-1.11.1.min.js') }}
{{ HTML::script('js/bootstrap.min.js') }}
</body>
</html>