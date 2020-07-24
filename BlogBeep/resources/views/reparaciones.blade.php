@extends('template')

@section('seccion')
     <!-- Breadcrumb Begin -->
    <div class="breadcrumb-option">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb__links">
                        <a href="#"><i class="fa fa-home"></i> Home</a>
                        <span>Reparaciones</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb End -->

    <!-- Skills Section Begin -->
    <section class="skills spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="skills__content">
                        <div class="section-title">
                            <h2> <a href="https://www.youtube.com/channel/UCXk9Voo5cAfoYbnXjrNZhVw" class="play-btn video-popup"><i class="fab fa-youtube"></i></a></h2>
                            <h1>Canal de Youtube</h1>
                        </div>
                        <p>Este es nuestro canal donde subimos todos nuestros trabajos grabados para que lo puedas ver</p>
                        
                    </div>
                </div>
                <div class="col-lg-12">
                    {{-- <iframe width="100%" height="500" src="https://www.youtube.com/embed/8mCSaCClGXQ" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> --}}   
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
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Anterior</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Siguiente</span>
                        </a>
                    </div>
                </div>
            </div>
            
        </div>
    </section>
    <!-- Skills Section End -->

    <!-- About Section Begin -->
    <section class="about about--page spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="about__pic">
                        <img src="img/about/about.png" alt="">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="about__text">
                        <div class="section-title">
                            <h2>He heard something that he knew to be music</h2>
                        </div>
                        <p>At vero eos et accusamus et iusto odi odgnissimos ducimus qui blanditiis praesentium volup
                            tatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati
                            cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi quod
                            justo pro an.</p>
                        <img src="img/about/signature.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- About Section End -->

    <!-- About Pic Begin -->
    <div class="about-pic">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6">
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-sm-4 p-0">
                            <img src="img/about/ap-1.jpg" alt="">
                            <img src="img/about/ap-2.jpg" alt="">
                        </div>
                        <div class="col-lg-8 col-md-8 col-sm-8 p-0">
                            <img src="img/about/ap-3.jpg" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="row">
                        <div class="col-lg-8 col-md-8 col-sm-8 p-0">
                            <img src="img/about/ap-4.jpg" alt="">
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4 p-0">
                            <img src="img/about/ap-5.jpg" alt="">
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4 p-0">
                            <img src="img/about/ap-6.jpg" alt="">
                        </div>
                        <div class="col-lg-8 col-md-8 col-sm-8 p-0">
                            <img src="img/about/ap-7.jpg" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About Pic End -->

    <!-- About Services Section Begin -->
    <section class="about-services spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title center-title">
                        <h2>Reparaciones</h2>
                        <h1>Imagenes de Muestra</h1>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="about__services__item">
                        <div class="about__services__item__pic set-bg">
                            <div class="icon">
                                <i class="fas fa-mobile-alt"></i>
                            </div>
                        </div>
                        <div class="about__services__item__text">
                            <h4>Celulares</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="about__services__item">
                        <div class="about__services__item__pic set-bg">
                            <div class="icon">
                                <i class="fas fa-laptop"></i>
                            </div>
                        </div>
                        <div class="about__services__item__text">
                            <h4>Computadoras</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod.</p>
                        </div>
                    </div>
                </div>
                {{-- <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="about__services__item">
                        <div class="about__services__item__pic set-bg" data-setbg="img/services/as-3.jpg">
                            <div class="icon">
                                <img src="img/services/as-icon-3.png" alt="">
                            </div>
                        </div>
                        <div class="about__services__item__text">
                            <h4>Corporate events</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod.</p>
                        </div>
                    </div>
                </div> --}}
            </div>
        </div>
    </section>
    <!-- About Services Section End -->
@endsection('seccion')