@extends('template', [
    'title' => 'Mis Reparaciones',
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
                        <span>Mis Reparaciones</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb End -->
    
    <misreparaciones-user />

@endsection('seccion')