@extends('layouts.app')

@section('content')

<style>
    .letraGrande{
        color:#40BDD6; 
        font-size:30px;
    }

    .letraMediana{
        color:#40BDD6; 
        font-size:20px;
    }

    .letraNormal{
        color:#2588B4; 
        font-size:18px;
    }

    
</style>

<div class="text-center">
    <img src="{{ asset('images/tienda.png') }}" class="card-img-top" style="width: 100%;" alt="Logo Udenar">
</div>
<div class="container text-center">
    <div class="card mt-4 text-center">
        <div>
            <h5 class="letraGrande mt-4"> <b>Tienda de artículos deportivos</b></h5>
        </div>
        <div class="card-body">
            <p class="card-text letraNormal">Ofrece a su clientela diversidad de artículos deportivos en calzado, ropa y accesorios tanto para hombres como mujeres</p>
        </div>
    </div>

    <div class="row mt-4">
        <div class="col-md-4">
            <div class="card" style="width: 20rem;">
                <img src="{{ asset('images/calzado.png') }}" class="card-img-top" alt="..." style="width: 100%;" >
                <div class="card-body">
                    <h5 class="text-center letraMediana">CALZADO</h5>
                    <p class="card-text text-left letraNormal">
                    <i class="fas fa-shoe-prints"></i> Tenis <br>
                    <i class="fas fa-dot-circle"></i> Botas <br>
                    <i class="fas fa-futbol"></i> Guayos
                    <br><br>
                    </p>
                    
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card" style="width: 20rem;">
                <img src="{{ asset('images/ropa.png') }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="text-center letraMediana">ROPA</h5>
                    <p class="card-text text-left letraNormal">
                    <i class="fas fa-tshirt"></i> Busos <br>
                    <i class="fas fa-tshirt"></i> Camisetas <br>
                    <i class="fas fa-dot-circle"></i> Chaquetas <br>
                    <i class="fas fa-tshirt"></i> Conjuntos <br>
                    </p>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card" style="width: 20rem;">
                <img src="{{ asset('images/accesorios.png') }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="text-center letraMediana">ACCESORIOS</h5>
                    <p class="card-text text-left letraNormal">
                    <i class="fas fa-hat-cowboy"></i> Gorras <br>
                    <i class="fas fa-dot-circle"></i> Morrales <br>
                    <i class="fas fa-mitten"></i> Guantes <br>
                    <i class="fas fa-biking"></i> Caramañolas <br>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>




@endsection