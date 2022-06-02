
    

<!DOCTYPE html>
<html>
  <head>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <style> 
    @import url('https://fonts.googleapis.com/css2?family=Raleway:wght@100;200;300;400;500;600;700;800;900&display=swap');

    * {
      font-family: 'Raleway', sans-serif; 
    }

    .row {
      margin: 0px !important;
    }

    nav ul a:hover {
      background-color: transparent !important;
    }

    th {
      text-align: center;
    }

    body {
      background-color: #EBFFFF;
    }

    [type="checkbox"].filled-in:checked+span:not(.lever):after {
      background-color: #456D87;
      border: #456D87;
    }
      nav {
        height: 60px;
        background-color: #ffffff;
        box-shadow: 0px -1px 12px rgba(0, 0, 0, 0.25);
      }
      a {
        color: black !important;
      }
      nav ul a {
        padding: 0px 20px;
      }

      .links {
        padding: 0px;
      }
      .cover {
        width: 100%;
        height: 100%;
      }
      .ccenter {
        display: flex;
        align-items: center;
        justify-content: center;
      }
      .navbar_js {
        display: flex;
        align-items: center;
        width: calc(100% - 60px);
        justify-content: space-between;
      }
      .acenter {
        display: flex;
        align-items: center;
      }
      .main-row {
        margin: 0px 20px 20px 20px !important;
        flex-direction: column;
      }
      .flex {
        display: flex !important;
      }
      .brand-logo {
        width: 60px;
        height: 60px;
        background-color: #456D87;
      }
      .login-bg {
        border: 3px solid #456D87;
        border-radius: 10px;
        height: 40px;
        width: 100px;
        transform: scale(75%);
        padding: 20px;
        gap: 5px;
        font-weight: 700;
      }
      .login {
        color: #456D87;
      }
      .logout-bg {
        border: 3px solid #C34C4C;
        border-radius: 10px;
        height: 40px;
        width: 100px;
        transform: scale(75%);
        margin-right: 20px;
        padding: 20px;
        gap: 5px;
        font-weight: 700;
      }
      .logout {
        color: #C34C4C;
      }
      .img_logo {
        height: 45px;
      }
      .img_nav {
        height: 30px;
      }
      .nav-left {
        margin-left: 20px;
      }
      form, table, td, th {
        background-color: #ffffff;
        padding: 20px;
        border-radius: 10px;
      }
      .pagination {
        gap: 10px;
        padding: 10px;
        border-radius: 58px;
        display: flex;
        justify-content: center;
        align-items: center;
      }
      .pagination li {
        box-shadow: 0px 3px 6px rgba(0, 0, 0, 0.25);
        background-color: #f8f8ff;
        width: 30px;
        display: flex;
        justify-content: center;
        align-items: center;
        border-radius: 50px;
        font-weight: 600;
      }
      .pagination li.active {
        background-color: #456D87;
        color: #ffffff !important;
      }
      .card {
        margin: 0px !important;
      }
      .card-image {
        border: 5px solid #ffffff;
      }
      .card-content {
        padding: 10px !important;
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
      }
      .card-title {
        background: linear-gradient(179deg, rgba(135, 0, 0, 0) 1%, rgba(7, 7, 7, 0.39) -20%);
        width: 100%;
        padding: 0px !important;
        height: 45px;
        font-weight: 600 !important;
        font-size: 22px !important;
        display: flex;
        justify-content: center;
        align-items: center;
      }
      .card-stitle {
        font-size: 16px;
        font-weight: 600 !important;
        opacity: 80%;
      }
      .card-desc {
        font-weight: 700 !important;
      }

      .img-td {
        width: 70px;
      }
      .btn {
        color: #ffffff !important;  
      }
      .edit-btn {
        border: 3px solid #66c49d;
        color: #66c49d !important;
        border-radius: 10px;
        height: 40px;
        width: 130px;
        transform: scale(75%);
        padding: 10px;
        gap: 5px;
        font-weight: 700;
      }
      .delete-btn {
        border: 3px solid #AC0202;
        color: #AC0202 !important;
        border-radius: 10px;
        height: 40px;
        width: 130px;
        transform: scale(75%);
        padding: 10px;
        gap: 5px;
        font-weight: 700;
      }
      .delete-img {
        width: 20px;
      }
      .title {
        font-weight: 800;
        margin: 60px 0px;
      }
      .subtitle {
        font-weight: 800;
        opacity: 80%;
      }
      .curso-row {
        /* margin-top: 100px !important; */
      }
    </style>
    <title>ESTUDO DE LARAVEL</title>
  </head>
  <body>  
<div class="row cover">
  <div class="row">
    <nav>
        <div class="nav-wrapper acenter">
            <div class="flex cover ">
              <div class="img-link"><a href="#!" class="brand-logo cover flex ccenter"><img src="http://127.0.0.1:8000/img/cursos//logo (1).svg" class="img_logo"></a></div>
              <div class="home-link"><a href="#" data-target="mobile" class="sidenav-trigger"><i class="material-icons">menu</i></a></div>
              <div class="nav-links cover">
                <ul class="right hide-on-med-and-down cover navbar_js">
                  <div class="nav-left">
                    <li class=""><a href="{{route('site.home')}}" class="flex"><img src="http://127.0.0.1:8000/img/cursos//home.svg" class="img_nav"></a></li>
                    <li class=""><a href="{{route('admin.cursos')}}" class="flex"><img src="http://127.0.0.1:8000/img/cursos//chart.svg" class="img_nav"></a></li>
                  </div>
                  @if(Auth::guest())
                  <li class=""><a href="{{route('site.login')}}"><div class="login-bg ccenter"><img src="http://127.0.0.1:8000/img/cursos//login.svg" alt="" class="login-img"><div class="login">LOGIN</div></div></a></li>
                  @else
                  <div class="ccenter">
                    <li class=""><a href="#" class="subtitle">Olá, {{Auth::user()->name}}!</a></li>
                    <li class=""><a href="{{route('site.login.sair')}}"><div class="logout-bg ccenter"><img src="http://127.0.0.1:8000/img/cursos//logout.svg" alt="" class="logout-img"><div class="logout">SAIR</div></div></a></li>
                  </div>
                  @endif
                </ul>
              </div>
            </div>
          </div>
      </nav>
      
      <ul class="sidenav" id="mobile">
        <li class=""><a href="{{route('site.home')}}">Home</a></li>
        @if(Auth::guest())
            <li class=""><a href="{{route('site.login')}}">Login</a></li>
            @else
            <li class=""><a href="{{route('admin.cursos')}}">Cursos</a></li>  
            <li class=""><a href="#">{{Auth::user()->name}}</a></li>  
            <li class=""><a href="{{route('site.login.sair')}}">Sair</a></li>  
        @endif
      </ul>
  </div>
</div>