@extends('templateHome')

@section('seccion')
    
    <!-- Hero Section Begin -->
    <section class="hero spad set-bg imgHeader">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="hero__text">
                        <span>Bienvenido</span>
                        <h1>Beep Informatica</h1>
                        <p>Lugar donde traes el celular muerto y sale vivo ;)</p>
                        <a href="https://www.youtube.com/channel/UCXk9Voo5cAfoYbnXjrNZhVw" class="play-btn video-popup" target="_blank"><i class="fa fa-play"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="linear__icon">
            <i class="fa fa-angle-double-down"></i>
        </div>
    </section>
    <!-- Hero Section End -->

    <!-- Event Section Begin -->
    <section class="event spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 col-md-9">
                    <div class="section-title">
                        <h2>Productos</h2>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3">
                    <div class="track__all">
                        <a href="{{route('productos')}}" class="primary-btn border-btn">Ver Productos</a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="img/parlanteDucha.jpg" class="d-block w-100 imgProductos" alt="Parlante ducha">
                        </div>
                        <div class="carousel-item">
                            <img src="img/auriculares2.png" class="d-block w-100 imgProductos" alt="auriculares">
                        </div>
                        <div class="carousel-item">
                            <img src="img/auriculares.png" class="d-block w-100 imgProductos" alt="auriculares">
                        </div>
                        <div class="carousel-item">
                            <img src="img/usb.jpg" class="d-block w-100 imgProductos" alt="usb">
                        </div>
                        <div class="carousel-item">
                            <img src="img/teclado.jpg" class="d-block w-100 imgProductos" alt="teclado">
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon bg-dark" aria-hidden="true"></span>
                        <span class="sr-only">Anterior</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
                        <span class="carousel-control-next-icon bg-dark" aria-hidden="true"></span>
                        <span class="sr-only">Siguiente</span>
                    </a>
                    </div>
                </div>    
            </div>
        </div>
    </section>
    <!-- Event Section End -->

    <!-- About Section Begin -->
    <section class="about spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2>Tecnicos de la Empresa</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <div class="about__pic">
                        <img width="100%" heigth="100%" src="{{ asset('img/miguel.jpg') }}" alt="">
                    </div>
                    <div class="about__text">
                        <div class="section-title">
                            <h2>Miguel Coscararte</h2>
                            <h1>Acerca de Mi</h1>
                        </div>
                        <p>Tecnico en informatica, me dedico a reparar celulares con mas de 10 años de experiencia</p>
                        <a href="{{route('contacto')}}" class="primary-btn">Contactame</a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="about__pic">
                        <img width="100%" heigth="100%" src="{{ asset('img/miguel.jpg') }}" alt="">
                    </div>
                    <div class="about__text">
                        <div class="section-title">
                            <h2>Miguel Laurence</h2>
                            <h1>Acerca de Mi</h1>
                        </div>
                        <p>Tecnico en Reparacion de computadoras, me dedico a reparar computadoras con mas de 17 años de experiencia</p>
                        <a href="{{route('contacto')}}" class="primary-btn">Contactame</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="track spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 p-0">
                    <figure>
                        <img class="logoBeep" src="img/fotoFooter.jpg" alt="">
                    </figure>
                </div>
            </div>
        </div>
    </section>
    <section class="countdown spad set-bg fotoFooter">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                </div>
            </div>
        </div>
    </section>
</div>

@endsection('seccion')