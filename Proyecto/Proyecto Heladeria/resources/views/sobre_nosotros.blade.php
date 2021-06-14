<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sobre nosotros</title>
  <link rel="stylesheet" href="css/style.css">
  <script src="js/jquery-3.6.0.min.js"></script>
  <script src="js/javascript.js"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

</head>

<body>

  <header>

    <img src="img/Logo azul.png" alt="logo_helado" class="mini-logo">

    <span class="span1">Av. lorem ipsum 122 Malaga, CP 29014 | Todos los Días 10AM-10PM </span>
    <img src="img/Logo azul.png" alt="logo_helado" class="mini-logo">

  </header>
  <div class="navbar navbar-dark bg-dark menu float_left">
    <a href="{{ url('/index') }}">Inicio</a>
    <a href="{{ url('/sabores') }}" >Sabores</a>
    <a href="{{ url('/sobre_nosotros') }}" class="active">Sobre nosotros</a>
    @if (Auth::check())
    
    <li class="dropdown float_right">
      <a href="#" class="dropdown-toggle" id="dropdownMenuLink" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
          {{ Auth::user()->name }} <span class="caret"></span>
      </a>

      <ul class="dropdown-menu bg-dark w-100" role="menu" aria-labelledby="dropdownMenuLink">
        <!-- <li><a class="dropdown-item" href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li> -->


        <form method="POST" action="{{ route('logout') }}">
           @csrf
   
           <a class="dropdown-item" href="route('logout')" onclick="event.preventDefault(); this.closest('form').submit();"><i class="fa fa-btn fa-sign-out">{{ __('Log out') }}</i></a>
       </form>
     </ul>
    </li>

  
    
    

    @else
    <a href="{{ url('/login') }}" class="float_right">Login</a>
    @endif
  </div>
  <section>



    <div class="sectionContent">


      <img src="img/Logo azul.png" alt="logo_helado" class="logo">


    </div>

  </section>




    <div class="contenido p-5">

        <div class="main col-12">
            <h1>NUESTROS SABORES</h1>
            <h2>¡Frescos y sabrosos!</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In mauris lectus, dapibus et accumsan eget, eleifend
              non turpis. Sed varius efficitur augue ac cursus. Nullam sit amet erat</p>
            <button type="button" class="menu-btn">Menu</button>
        </div>
        </div>

  <div class="imgFondo4"></div>

  <div class="contenido p-5">

    <div class="main col-12">
      <h1>SOBRE NOSOTROS</h1>
      <h2>¡Nos apasiona el helado!</h2>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In mauris lectus, dapibus et accumsan eget, eleifend
        non turpis. Sed varius efficitur augue ac cursus. Nullam sit amet erat</p>
      <button type="button" class="menu-btn">Menu</button>
    </div>
    </div>

  <div class="imgFondo5"></div>


  <div class="contenido p-5">

    <div class="main col-12">
        <h1>POSTRES</h1>
        <h2>Helados y mas!</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In mauris lectus, dapibus et accumsan eget, eleifend
          non turpis. Sed varius efficitur augue ac cursus. Nullam sit amet erat</p>
        <button type="button" class="menu-btn">Menu</button>
    </div>
    </div>

  <div class="imgFondo3">
    <img src="img/helado4.png" class="img4" alt="cucurucho de vainilla con chocolate">
  </div>






  <footer class="footer">
    <span class="span1">Av. lorem ipsum 122 Malaga, CP 29014 | Todos los Días 10AM-10PM </span>
  </footer>


  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>

</html>