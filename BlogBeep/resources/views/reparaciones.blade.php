@extends('template', [
    'title' => 'Reparaciones',
    'metaDescription' => 'Todas las reparaciones realizadas por Beep Informatica'
])

@section('seccion')

    <section class="about about--page spad">
        <reparaciones-user />
    </section>

    <!-- Skills Section Begin -->
    <section class="skills spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="skills__content">
                        <div class="section-title">
                            <h2> <a href="https://www.youtube.com/channel/UCXk9Voo5cAfoYbnXjrNZhVw" class="play-btn video-popup" target="_blank"><i class="fab fa-youtube"></i></a></h2>
                            <h1><a href="https://www.youtube.com/channel/UCXk9Voo5cAfoYbnXjrNZhVw" class="titleYT" target="_blank"> Canal de Youtube</a></h1>
                        </div>
                        {{-- <p>Este es nuestro canal donde subimos todos nuestros trabajos grabados para que lo puedas ver</p> --}}
                        
                    </div>
                </div>
                <div class="col-lg-12">
                    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <iframe width="100%" height="500" src="https://www.youtube.com/embed/8mCSaCClGXQ" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            </div>
                            <div class="carousel-item">
                                <iframe width="100%" height="500" src="https://www.youtube.com/embed/8mCSaCClGXQ" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            </div>
                            <div class="carousel-item">
                                <iframe width="100%" height="500" src="https://www.youtube.com/embed/8mCSaCClGXQ" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                            {{-- <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Anterior</span> --}}
                            <i class="fas fa-angle-left btnCarousel" aria-hidden="true"></i>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                            {{-- <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Siguiente</span> --}}
                            <i class="fas fa-angle-right btnCarousel" aria-hidden="true"></i>
                        </a>
                    </div>
                </div>
            </div>      
        </div>
    </section>

    <imagenes-user />
@endsection('seccion')