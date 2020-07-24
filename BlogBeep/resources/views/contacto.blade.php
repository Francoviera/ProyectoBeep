@extends('template')

@section('seccion')
<!-- Breadcrumb Begin -->
    <div class="breadcrumb-option">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb__links">
                        <a href="#"><i class="fa fa-home"></i> Home</a>
                        <span>Contacto</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb End -->

    <!-- Map Begin -->
    <div class="map">
        <div class="container">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d856.4040386160771!2d-61.42063483926367!3d-36.431227438954075!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1ses-419!2sar!4v1595561264546!5m2!1ses-419!2sar"
                height="585" style="border:0;" allowfullscreen="">
            </iframe>
        </div>
    </div>
    <!-- Map End -->

    <!-- Contact Section Begin -->
    <section class="contact spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="contact__address">
                        <div class="section-title">
                            <h2>Informacion</h2>
                        </div>
                        <p>Nuestros Datos de contacto</p>
                        <ul>
                            <li>
                                <i class="fa fa-map-marker"></i>
                                <h5>Direccion</h5>
                                <p>Rivadavia 204</p>
                            </li>
                            <li>
                                <i class="fa fa-phone"></i>
                                <h5>Telefonos</h5>
                                <span><a href="tel:+542314-535494">+542314-535494</a></span>
                                <span><a href="tel:+542314-557289">+542314-557289</a></span>
                            </li>
                            <li>
                                <i class="fa fa-envelope"></i>
                                <h5>Email</h5>
                                <p>Beepinformatica@gmail.com</p>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="contact__form">
                        <div class="section-title">
                            <h2>Agregar Consulta</h2>
                        </div>
                        <p>Estaremos en contacto lo antes posible con vos para poder responder a tu consulta</p>
                        <form action="#">
                            <div class="input__list">
                                <input type="text" placeholder="Nombre">
                                <input type="text" placeholder="Email">
                                <input type="text" placeholder="Telefono">
                            </div>
                            <textarea placeholder="Consulta"></textarea>
                            <button type="submit" class="site-btn">Enviar Mensaje</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Contact Section End -->
@endsection('seccion')