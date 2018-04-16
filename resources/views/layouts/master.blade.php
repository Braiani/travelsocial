<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ setting('site.title', 'Travel Social') }} | @yield('title')</title>

    <!-- Bootstrap core CSS -->
    <link href="{{ asset('/css/bootstrap.css')}}" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="{{ asset('/css/style.css')}}" rel="stylesheet">
    <link href="{{ asset('/css/font-awesome.css')}}" rel="stylesheet">
  </head>

  <body>

  <header>
    <div class="container">
      <img src="@if(setting('site.logo')) {{ url('/storage/'.setting('site.logo')) }} @else {{ url('/img/logo.png') }} @endif" class="logo" alt="">
      @guest
      <form class="form-inline" method="POST" action="{{ route('voyager.login') }}">
        {{ csrf_field() }}
        <div class="form-group">
          <label class="sr-only" for="email">E-mail</label>
          <input type="email" class="form-control" name="email" id="email" placeholder="Digite o E-mail" required>
        </div>
        <div class="form-group">
          <label class="sr-only" for="password">Senha</label>
          <input type="password" class="form-control" name="password" id="password" placeholder="Senha" required>
        </div>
        <button type="submit" class="btn btn-default">Entrar</button><br>
        <div class="checkbox">
          <label>
            <input type="checkbox" name="remember" checked> Lembrar de mim
          </label>
        </div>
      </form>
      @endguest
      @auth
        <div class="text-right"><span>Olá, {{ Auth::user()->name }}!</span></div>
        <form action="{{ route('logout') }}" method="POST">
          {{ csrf_field() }}
          <button type="submit" class="btn btn-default"><i class="fa fa-power-off"></i> Sair</button>
        </form>
      @endauth
    </div>
  </header>

    <nav class="navbar navbar-default">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            {!! menu('site', 'bootstrap') !!}
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

    <section>
      <div class="container">
        <div class="row">
          <div class="col-md-8">
            @yield('main-content')
          </div>
          <div class="col-md-4">
            @include('layouts.sidebar')
          </div>
        </div>
      </div>
    </section>

    <footer>
      <div class="container">
        <p><a href="http://braianitech.tk">BRtech Sistemas</a> Copyright &copy, {{ date('Y') }}</p>
      </div>
    </footer>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="{{ asset('/js/bootstrap.js') }}"></script>
  </body>
</html>