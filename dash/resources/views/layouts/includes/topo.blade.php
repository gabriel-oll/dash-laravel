
    

<!DOCTYPE html>
<html>
  <head>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <style>
      .cover {
        width: 100%;
        height: 100%;
      }
      .main-row {
        width: calc(100% - 40px);
      }
      .flex {
        display: flex;
      }
      .brand-logo {
        margin-left: 10px;
      }
    </style>
    <title>ESTUDO DE LARAVEL</title>
  </head>
  <body>
<div class="row cover">
  <div class="row">
    <nav>
        <div class="nav-wrapper">
          <a href="#!" class="brand-logo">Curso Laravel</a>
          <a href="#" data-target="mobile" class="sidenav-trigger"><i class="material-icons">menu</i></a>
          <ul class="right hide-on-med-and-down">
            <li><a href="{{route('site.home')}}">Home</a></li>
            @if(Auth::guest())
            <li><a href="{{route('site.login')}}">Login</a></li>
            @else
            <li><a href="{{route('admin.cursos')}}">Cursos</a></li>  
            <li><a href="#">{{Auth::user()->name}}</a></li>  
            <li><a href="{{route('site.login.sair')}}">Sair</a></li>  
            @endif
          </ul>
        </div>
      </nav>
      
      <ul class="sidenav" id="mobile">
        <li><a href="{{route('site.home')}}">Home</a></li>
        @if(Auth::guest())
            <li><a href="{{route('site.login')}}">Login</a></li>
            @else
            <li><a href="{{route('admin.cursos')}}">Cursos</a></li>  
            <li><a href="#">{{Auth::user()->name}}</a></li>  
            <li><a href="{{route('site.login.sair')}}">Sair</a></li>  
        @endif
      </ul>
  </div>
</div>