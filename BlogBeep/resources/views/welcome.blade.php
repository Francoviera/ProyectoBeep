@extends('templateHome', [
    'title' => 'Home',
    'metaDescription' => 'Pagina principal de Beep Informatica'
])
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
                        <a href="{{route('productos')}}" class="primary-btn border-btn btnHome">Ver Productos</a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
                    <div class="carousel-inner">
                        {{$i = 0}}
                        @foreach ( $productos as $product)
                            <div  @if($i == 0) class="carousel-item active" @endif class="carousel-item">
                                <img src={{ asset("imgProductos/$product->img")}} class="d-block w-100 imgProductos" alt="Imagenes de Productos">
                            </div>
                            {{$i++}}
                        @endforeach
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
                        <i class="fas fa-angle-left btnCarousel" aria-hidden="true"></i>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next" width="40px" heigth="40px">
                        <i class="fas fa-angle-right btnCarousel" aria-hidden="true"></i>
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
                        <img width="100%" heigth="100%" src="{{ asset('img/logoPhone.png') }}" alt="Logo de celulares">
                    </div>
                    <div class="about__text">
                        <div class="section-title">
                            <h2>Servicio en Celulares</h2>
                            <h1>Acerca de Mi</h1>
                        </div>
                        <p>Tecnico en informatica, me dedico a reparar celulares con mas de 10 años de experiencia</p>
                        <a href="{{route('contacto')}}" class="primary-btn border-btn btnHome">Contactame</a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="about__pic">
                        <img width="100%" heigth="80%" src="{{ asset('img/logoPC.png') }}" alt="Logo de Computadora">
                    </div>
                    <div class="about__text">
                        <div class="section-title">
                            <h2>Servicio en Computadoras</h2>
                            <h1>Acerca de Mi</h1>
                        </div>
                        <p>Tecnico en Reparacion de computadoras, me dedico a reparar computadoras con mas de 17 años de experiencia</p>
                        <a href="{{route('contacto')}}" class="primary-btn border-btn btnHome">Contactame</a>
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