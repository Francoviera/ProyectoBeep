<!doctype html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/user/bootstrap.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/user/font-awesome.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/user/barfiller.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/user/nowfont.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/user/rockville.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/user/magnific-popup.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/user/owl.carousel.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/user/slicknav.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/user/style.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/user/estilo.css') }}" type="text/css">

    <script src="https://kit.fontawesome.com/4b4084f640.js" crossorigin="anonymous"></script>
    <script src="{{ asset('js/user/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ asset('js/user/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/user/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('js/user/jquery.nicescroll.min.js') }}"></script>
    <script src="{{ asset('js/user/jquery.barfiller.js') }}"></script>
    <script src="{{ asset('js/user/jquery.countdown.min.js') }}"></script>
    <script src="{{ asset('js/user/jquery.slicknav.js') }}"></script>
    <script src="{{ asset('js/user/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('js/user/navBar.js') }}"></script>
    <script src="{{ asset('js/user/main.js') }}"></script>
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

    <title> {{$title ?? ''}} | Beep Informatica</title>
    <meta name="robots" content="index, follow"/>
    <meta name="googlebot" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1"/>
    <meta name="bingbot" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1"/>
  </head>
  <body>
    <div id="preloder">
        <div class="loader"></div>
    </div> 
    <header class="header">
        <div class="container">
            <div class="row">
                <div class="col-lg-2 col-md-2">
                    <div class="header__logo logo">
                        <span>Beep</span>
                    </div>
                </div>
                <div class="col-lg-10 col-md-10">
                    <div class="header__nav">
                        <nav class="header__menu mobile-menu">
                            <ul>
                                <li class="active"><a href="{{route('welcome')}}">Home</a></li>
                                <li><a href="{{route('productos')}}">Productos</a></li>
                                <li><a href="{{route('contacto')}}">Contacto </a></li>
                                <li><a href="{{route('reparaciones')}}">Reparaciones</a>
                                    @if (Auth::check())
                                        <ul class="dropdown">
                                            <li><a href="{{route('misreparaciones')}}">Mis Reparaciones</a></li>
                                        </ul>
                                    @endif
                                </li>
                                 @guest
                                    <li>
                                        <a  href="{{ route('login') }}">{{ __('Login') }}</a>
                                    </li>
                                    @if (Route::has('register'))
                                        <li>
                                            <a  href="{{ route('register') }}">{{ __('Register') }}</a>
                                        </li>
                                    @endif
                                    @else 
                                        <li>
                                            <a><i class="far fa-user"></i><span> </span><span >{{ Auth::user()->name }}</span></a>
                                        </li>
                                        <li>
                                            <a href="{{ route('logout') }}"
                                                onclick="event.preventDefault();
                                                            document.getElementById('logout-form').submit();">
                                                <i class="fas fa-power-off"></i>
                                                <ul class="dropdown">
                                                    <li><span> Cerrar Sesion </span></li>
                                                </ul>
                                            </a>
                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                @csrf
                                            </form>
                                        </li>
                                @endguest 
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
            <div id="mobile-menu-wrap">
                <div class="slicknav_menu">
                    <a aria-haspopup="true" role="button" tabindex="0" class="slicknav_btn slicknav_open" style="">
                        <span class="slicknav_menutxt">MENU</span><span class="slicknav_icon"><span class="slicknav_icon-bar"></span>
                        <span class="slicknav_icon-bar"></span><span class="slicknav_icon-bar"></span></span>
                    </a>
                    <nav class="slicknav_nav is-active" aria-hidden="false" role="menu" style="">
                        <ul>
                            <li class="active"><a href="{{route('welcome')}}">Home</a></li>
                            <li><a href="{{route('productos')}}">Productos</a></li>
                            <li><a href="{{route('contacto')}}">Contacto </a></li>
                            <li><a href="{{route('reparaciones')}}">Reparaciones</a>
                                @if (Auth::check())
                                    <ul class="dropdown">
                                        <li><a href="{{route('misreparaciones')}}">Mis Reparaciones</a></li>
                                    </ul>
                                @endif
                            </li>
                                @guest
                                <li>
                                    <a  href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                                @if (Route::has('register'))
                                    <li>
                                        <a  href="{{ route('register') }}">{{ __('Register') }}</a>
                                    </li>
                                @endif
                                @else 
                                    <li>
                                        <a><i class="far fa-user"></i><span> </span><span >{{ Auth::user()->name }}</span></a>
                                    </li>
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                        document.getElementById('logout-form').submit();">
                                            <i class="fas fa-power-off"></i><span> Cerrar Sesion </span>
                                        </a>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            @csrf
                                        </form>
                                    </li>
                            @endguest 
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <div id= "app" >
        @yield('seccion')
    </div>
    <footer class="footer spad set-bg imgFooter">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="footer__address">
                        <ul>
                            <li>
                                <i class="fa fa-phone"></i>
                                <p>Telefono</p>
                                <h6>+542314-535494</h6>
                            </li>
                            <li>
                                <i class="fa fa-envelope"></i>
                                <p>Email</p>
                                <h6>Beepinformatica1@gmail.com</h6>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 offset-lg-1 col-md-6">
                    <div class="footer__social">
                        <h2>Beep</h2>
                        <div class="footer__social__links">
                            <a href="https://www.facebook.com/Beep-Informatica-321390271829067/" target="_blank"><i class="fa fa-facebook"></i></a>
                            <a href="https://www.instagram.com/beepinformaticaurdampilleta/?hl=es" target="_blank"><i class="fa fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 offset-lg-1 col-md-6">
                    <div class="footer__newslatter">
                        <form>
                            <input type="text" placeholder="Contactame" disabled>
                            <a href="{{route('contacto')}}"><button type="button"><i class="fa fa-send-o"></i></button></a>
                        </form>
                    </div>
                </div>
            </div>
			<div class="footer__copyright__text">
				<p>Copyright &copy; <script>document.write(new Date().getFullYear());</script> Todos los derechos reservados | Esta pagina fue realizada <i class="fa fa-fire" aria-hidden="true"></i> por <a href="https://www.facebook.com/franco.viera.125" target="_blank">Franco Viera</a></p>
			</div>
        </div>
    </footer>
  </body>
</html>