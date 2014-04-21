<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sharon Ranels</title>



    <!-- Bootstrap -->
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">

    <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">

     <link rel="stylesheet" href="/css/resume-portfolio-styling.css">

     <link href="/css/signin.css" rel="stylesheet">

    <script src="http://blog.dev/js/ckeditor/ckeditor.js"></script>

@yield('top-script')

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
   
  </head>


  <body>

    <nav class="navbar" role="navigation">
      <div class="container-fluid navbar-font">
      <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <div class="navbar-brand navbar-font-color navbar-font-size"><strong>Sharon Ranels</strong>, <span id="title-font">Web Developer</span></div>
        </div>
        
        <ul class="nav navbar-nav navbar-right">
          
          <li><a class="navbar-font-color" href="{{{ action('HomeController@showHome') }}}">Home</a></li>

          @if (Auth::check())
            @if(Auth::user()->admin == 'y')
              <li><a class="navbar-font-color" href="{{{ action('HomeController@showHome') }}}">Admin</a></li>
            @endif
          @endif

          <li><a class="navbar-font-color" href="{{{ action('HomeController@showResume') }}}">Resum&eacute;</a></li>
          
          <li><a class="navbar-font-color" href="{{{ action('HomeController@showPortfolio') }}}">Portfolio</a></li>
          
          <li><a class="navbar-font-color" href="{{{ action('PostsController@index') }}}">Blog</a></li>
          
          @if (Auth::check())
            <li><a class="navbar-font-color" href="{{{ action('HomeController@logout') }}}">Logout ({{{ Auth::user()->email }}})</a></li>
          @else
            <li><a class="navbar-font-color" href="{{{ action('UserController@create') }}}">Register</a></li>

            <li><a class="navbar-font-color" href="{{{ action('HomeController@showLogin') }}}">Login</a></li>
          @endif

        </ul>

      </div><!-- /.navbar-collapse -->
    </nav>
 
<div class="container">

    @if (Session::has('successMessage'))
        <div class="alert alert-success">{{{ Session::get('successMessage') }}}</div>
    @endif
    @if (Session::has('errorMessage'))
        <div class="alert alert-danger">{{{ Session::get('errorMessage') }}}</div>
    @endif



 @yield('content')

</div>


  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>

    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>

@yield('bottom-script')


  </body>
</html>