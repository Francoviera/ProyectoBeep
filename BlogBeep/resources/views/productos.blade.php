@extends('template', [
    'title' => 'Productos',
    'metaDescription' => 'Todos los productos de la mejor calidad al mejor precio en Beep Informatica'
])

@section('seccion')
    <!-- Breadcrumb Begin -->
    <div class="breadcrumb-option">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb__links">
                        <a href="{{route('welcome')}}">
                            <i class="fa fa-home"></i> Home
                        </a>
                        <span>Productos</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb End -->
    
    <productos-user />
    <!-- Discography Section End -->
@endsection('seccion')