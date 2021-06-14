<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sabores</title>
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
        <a href="{{ url('/sabores') }}" class="active">Sabores</a>
        <a href="{{ url('/sobre_nosotros') }}">Sobre nosotros</a>

        


        @if (Auth::check())

        <button class="clear-cart btn btn-danger p-3 float_right">Limpiar Cesta</button>
        <button type="button" class="btn btn-primary p-3 float_right" data-toggle="modal" data-target="#cart">Cesta (<span class="total-count"></span>)</button>
    
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
    <!--
        <button class="clear-cart btn btn-danger p-3 float_right">Limpiar Cesta</button>
        <button type="button" class="btn btn-primary p-3 float_right" data-toggle="modal" data-target="#cart">Cesta (<span class="total-count"></span>)</button>
    -->
    </div>
    <section>



        <div class="sectionContent">


            <img src="img/Logo azul.png" alt="logo_helado" class="logo">


        </div>

    </section>

<div class="white">

<h1 class="center p-4">SABORES DE HELADOS</h1>
<ul class="wrapper cf">

	<li class="product fl-l">
    	<div class="container-prod">
        	<div class="image" style="background-image:url('img/Helados/Avellanas\ y\ galletas.jpg');"></div>
            <div class="container-information">
            	<div class="title">
                    Avellanas y Galletas
                </div>
              
            </div>
            <div class="buttons cf">
                <a href="javascript:void(0)" class="cart fl-l add-to-cart" data-name="Avellanas&nbsp;y&nbsp;galletas" data-price="2.5">
                	<span>
                    	<span class="add">Añadir<i class="fas fa-shopping-cart"></i></span>
                   	</span>
                </a>
            </div>

        </div>
	</li>
	<li class="product fl-l">
    	<div class="container-prod">
        	<div class="image" style="background-image:url('img/Helados/Cheesecake\ de\ cereza.jpg');"></div>
            <div class="container-information">
            	<div class="title">
                    Cheesecake de cereza
                    <a href="javascript:void(0)" class="more close"><i class="fa fa-times"></i></a>                
                </div>
            </div>
            <div class="buttons cf">
                <a href="javascript:void(0)" class="cart fl-l add-to-cart" data-name="Cheesecake&nbsp;de&nbsp;cereza" data-price="3">
                	<span>
                    	<span class="add">Añadir<i class="fas fa-shopping-cart"></i></span>
                   	</span>
                </a>
            </div>
        </div>
	</li>
    <li class="product fl-l">
    	<div class="container-prod">
        	<div class="image" style="background-image:url('img/Helados/Chocolate.jpg');"></div>
            <div class="container-information">
            	<div class="title">
                    Chocolate
                    <a href="javascript:void(0)" class="more close"><i class="fa fa-times"></i></a>                
                </div>
            </div>
            <div class="buttons cf">
                <a href="javascript:void(0)" class="cart fl-l add-to-cart" data-name="Chocolate" data-price="3">
                	<span>
                    	<span class="add">Añadir<i class="fas fa-shopping-cart"></i></span>
                   	</span>
                </a>
            </div>
        </div>
	</li>
    
    
</ul>

<ul class="wrapper cf">
	<li class="product fl-l">
    	<div class="container-prod">
        	<div class="image" style="background-image:url('img/Helados/Oreo.jpg');"></div>
            <div class="container-information">
            	<div class="title">
                    Oreo
                    <a href="javascript:void(0)" class="more close"><i class="fa fa-times"></i></a>                
                </div>
            </div>
            <div class="buttons cf">
                <a href="javascript:void(0)" class="cart fl-l add-to-cart" data-name="Oreo" data-price="3">
                	<span>
                    	<span class="add">Añadir<i class="fas fa-shopping-cart"></i></span>
                   	</span>
                </a>
            </div>
        </div>
	</li>
	<li class="product fl-l">
    	<div class="container-prod">
        	<div class="image" style="background-image:url('img/Helados/Pistacho.jpg');"></div>
            <div class="container-information">
            	<div class="title">
                    Pistacho
                    <a href="javascript:void(0)" class="more close"><i class="fa fa-times"></i></a>                
                </div>
            </div>
            <div class="buttons cf">
                <a href="javascript:void(0)" class="cart fl-l add-to-cart" data-name="Pistacho" data-price="3">
                	<span>
                    	<span class="add">Añadir<i class="fas fa-shopping-cart"></i></span>
                   	</span>
                </a>
            </div>
        </div>
	</li>
    <li class="product fl-l">
    	<div class="container-prod">
        	<div class="image" style="background-image:url('img/Helados/Vainilla\ con\ frutilla.jpg');"></div>
            <div class="container-information">
            	<div class="title">
                    Vainilla con frutas
                    <a href="javascript:void(0)" class="more close"><i class="fa fa-times"></i></a>                
                </div>
            </div>
            <div class="buttons cf">
                <a href="javascript:void(0)" class="cart fl-l add-to-cart" data-name="Vainilla&nbsp;y&nbsp;frutilla" data-price="3">
                	<span>
                    	<span class="add">Añadir<i class="fas fa-shopping-cart"></i></span>
                   	</span>
                </a>
            </div>
        </div>
	</li>
    
    
</ul>


<h1 class="center p-4 mt-4 mb-4">SABORES LIBRES DE LÁCTEOS</h1>

<ul class="wrapper cf">
	<li class="product fl-l">
    	<div class="container-prod">
        	<div class="image" style="background-image:url('img/Helados/Libres_de_lacteos/Banana\ y\ miel.jpg');"></div>
            <div class="container-information">
            	<div class="title">
                    Banana y miel
                    <a href="javascript:void(0)" class="more close"><i class="fa fa-times"></i></a>                
                </div>
            </div>
            <div class="buttons cf">
                <a href="javascript:void(0)" class="cart fl-l add-to-cart" data-name="Banana&nbsp;y&nbsp;miel" data-price="3">
                	<span>
                    	<span class="add">Añadir<i class="fas fa-shopping-cart"></i></span>
                   	</span>
                </a>
            </div>
        </div>
	</li>
	<li class="product fl-l">
    	<div class="container-prod">
        	<div class="image" style="background-image:url('img/Helados/Libres_de_lacteos/Soja\ con\ caramelo\ salado.jpg');"></div>
            <div class="container-information">
            	<div class="title">
                    Soja con caramelo
                    <a href="javascript:void(0)" class="more close"><i class="fa fa-times"></i></a>                
                </div>
            </div>
            <div class="buttons cf">
                <a href="javascript:void(0)" class="cart fl-l add-to-cart" data-name="Soja&nbsp;con&nbsp;caramelo&nbsp;salado" data-price="3">
                	<span>
                    	<span class="add">Añadir<i class="fas fa-shopping-cart"></i></span>
                   	</span>
                </a>
            </div>
        </div>
	</li>
    <li class="product fl-l">
    	<div class="container-prod">
        	<div class="image" style="background-image:url('img/Helados/Libres_de_lacteos/Sorbete\ de\ frambuesa.jpg');"></div>
            <div class="container-information">
            	<div class="title">
                    Sorbete de frambuesa
                    <a href="javascript:void(0)" class="more close"><i class="fa fa-times"></i></a>                
                </div>
            </div>
            <div class="buttons cf">
                <a href="javascript:void(0)" class="cart fl-l add-to-cart" data-name="Sorbete&nbsp;de&nbsp;frambuesa" data-price="3">
                	<span>
                    	<span class="add">Añadir<i class="fas fa-shopping-cart"></i></span>
                   	</span>
                </a>
            </div>
        </div>
	</li>
    
</ul>

<ul class="wrapper cf">
	<li class="product fl-l">
    	<div class="container-prod">
        	<div class="image" style="background-image:url('img/Helados/Libres_de_lacteos/Sorbete\ de\ frutilla.jpg');"></div>
            <div class="container-information">
            	<div class="title">
                    Sorbete de frutas
                    <a href="javascript:void(0)" class="more close"><i class="fa fa-times"></i></a>                
                </div>
            </div>
            <div class="buttons cf">
                <a href="javascript:void(0)" class="cart fl-l add-to-cart" data-name="Sorbete&nbsp;de&nbsp;frutilla" data-price="3">
                	<span>
                    	<span class="add">Añadir<i class="fas fa-shopping-cart"></i></span>
                   	</span>
                </a>
            </div>
        </div>
	</li>
	<li class="product fl-l">
    	<div class="container-prod">
        	<div class="image" style="background-image:url('img/Helados/Libres_de_lacteos/Sorbete\ de\ lima.jpg');"></div>
            <div class="container-information">
            	<div class="title">
                    Sorbete de lima
                    <a href="javascript:void(0)" class="more close"><i class="fa fa-times"></i></a>                
                </div>
            </div>
            <div class="buttons cf">
                <a href="javascript:void(0)" class="cart fl-l add-to-cart" data-name="Sorbete&nbsp;de&nbsp;lima" data-price="3">
                	<span>
                    	<span class="add">Añadir<i class="fas fa-shopping-cart"></i></span>
                   	</span>
                </a>
            </div>
        </div>
	</li>
    <li class="product fl-l">
    	<div class="container-prod">
        	<div class="image" style="background-image:url('img/Helados/Libres_de_lacteos/Sorbete\ de\ zarzamora.jpg');"></div>
            <div class="container-information">
            	<div class="title">
                    Sorbete de zarzamora
                    <a href="javascript:void(0)" class="more close"><i class="fa fa-times"></i></a>                
                </div>
            </div>
            <div class="buttons cf">
                <a href="javascript:void(0)" class="cart fl-l add-to-cart" data-name="Sorbete&nbsp;de&nbsp;zarzamora" data-price="3">
                	<span>
                    	<span class="add">Añadir<i class="fas fa-shopping-cart"></i></span>
                   	</span>
                </a>
            </div>
        </div>
	</li>
    
    
</ul>

</div>


    <footer class="footer mt-5">
        <span class="span1">Av. lorem ipsum 122 Malaga, CP 29014 | Todos los Días 10AM-10PM </span>
    </footer>

     <!-- Modal -->
<div class="modal fade" id="cart" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Cesta - Pedidos</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <table class="show-cart table">
            
          </table>
          <div>Precio Total: €<span class="total-cart"></span></div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
          <button type="button" class="btn btn-primary">Pagar ahora</button>
        </div>
      </div>
    </div>
  </div>


  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


<script src="js/shopping-cart.js"></script>
</body>