@extends('layouts.admin')

@section('main-content')
<!-- Page Heading -->
<h1 class="h3 mb-4 text-gray-800">{{ __('Reporte Uno') }}</h1>


<!-- @if (session('success'))
        <div class="alert alert-success border-left-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif

    @if ($errors->any())
        <div class="alert alert-danger border-left-danger" role="alert">
            <ul class="pl-4 my-2">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif -->



<div class="row">

    <div class="col-lg-4 order-lg-1">

        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Propuesto para la Planificación</h6>
            </div>

            <div class="card-body">

                <form class="row g-3" action="/reportOne/all" method="POST" id="signupform">


                    <div class="col-md-8">
                        <label for="inputState" class="form-label">Seleccione tipo de Servicio</label>
                        <select id="servicioSelect1" class="form-select">
                            <option value="1" selected>ABARROTES</option>
                            <option value="2">REFRIGERADOS</option>
                        </select>
                    </div>
                    <div class="col-md-4 mb-2">
                        <label for="inputZip" class="form-label">Cantidad</label>
                        <input type="text" class="form-control" id="inputCantidad1" onchange="sumar(this.value)">
                    </div>
                    <div class="col-md-8">
                        <!-- <label for="inputState" class="form-label">Seleccione tipo de Servicio</label> -->
                        <select id="servicioSelect2" class="form-select">
                            <option value="2" selected>REFRIGERADOS</option>
                            <option value="1">ABARROTES</option>

                        </select>

                    </div>
                    <div class="col-md-4 mb-3" >
                        <!-- <label for="inputZip" class="form-label">Cantidad</label> -->
                        <input type="text" class="form-control" id="inputCantidad2" onchange="sumar(this.value)">
                    </div>

                    <div class="col-md-8">
                        <label for="colFormLabelSm" class="col-md-8 ">Total</label>
                    </div>
                    <div class="col-md-4">
                        <span class="col-md-8 "  id="inputTotal"></span>

                    </div>

                    <div class="col-12 mt-3">
                        <button type="submit" class="btn btn-primary">Procesar datos</button>
                    </div>
                    <div class="col-md-12 text-center mt-3">
                        <h1 id="inputTotal"></h1>
                        <label for="colFormLabelsm" class="display-1">-</label>
                    </div>



                </form>

            </div>


        </div>

    </div>
    <div class="col-lg-8 order-lg-2">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Resumen detallado del día</h6>
            </div>
            <div class="card-body">
                <div class="card-group">
                    <div class="card">

                        <div class="card-body">
                            <div class="mb-3 row">
                                <label for="inputPassword" class="col-sm-5 col-form-label">Total Clientes</label>
                                <div class="col-sm-5">
                                    <input type="password" class="form-control" id="inputPassword">
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="inputPassword" class="col-sm-5 col-form-label">Tn Programado</label>
                                <div class="col-sm-5">
                                    <input type="password" class="form-control" id="inputPassword">
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="inputPassword" class="col-sm-5 col-form-label">Venta - [IGV]</label>
                                <div class="col-sm-5">
                                    <input type="password" class="form-control" id="inputPassword">
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="inputPassword" class="col-sm-5 col-form-label">Venta + [IGV]</label>
                                <div class="col-sm-5">
                                    <input type="password" class="form-control" id="inputPassword">
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="inputPassword" class="col-sm-5 col-form-label">Clie Reparto</label>
                                <div class="col-sm-5">
                                    <input type="password" class="form-control" id="inputPassword">
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="inputPassword" class="col-sm-5 col-form-label">Soles Reparto</label>
                                <div class="col-sm-5">
                                    <input type="password" class="form-control" id="inputPassword">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card">

                        <div class="card-body">
                            <h5 class="card-title">Flete del dia</h5>
                            <div class="mb-3 row">
                                <label for="inputPassword" class="col-sm-5 col-form-label">Costo / Venta</label>
                                <div class="col-sm-5">
                                    <!-- <label for="inputPassword" class="col-sm-5 col-form-label">Costo / Venta</label> -->

                                    <input type="password" class="form-control" id="inputPassword">
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="inputPassword" class="col-sm-5 col-form-label">Drop size</label>
                                <div class="col-sm-5">
                                    <input type="password" class="form-control" id="inputPassword">
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="inputPassword" class="col-sm-5 col-form-label">Tn / Camión</label>
                                <div class="col-sm-5">
                                    <input type="password" class="form-control" id="inputPassword">
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <!-- Button -->
                <div class="card-footer md-4">
                    <div class="row ">
                        <div class="col ">
                            <button type="submit" class="btn btn-primary">Fletes</button>
                            <button type="submit" class="btn btn-success">Ver tabla</button>

                        </div>
                    </div>
                </div>
            </div>
        </div>


    </div>
</div>

@endsection


@section('scripts')

<script>
    /* Sumar dos números. */
    function sumar(valor) {
        var total = 0;
        valor = parseInt(valor); // Convertir el valor a un entero (número).

        total = document.getElementById('inputTotal').innerHTML;

        // Aquí valido si hay un valor previo, si no hay datos, le pongo un cero "0".
        total = (total == null || total == undefined || total == "") ? 0 : total;

        /* Esta es la suma. */
        total = (parseInt(total) + parseInt(valor));

        // Colocar el resultado de la suma en el control "span".
        document.getElementById('inputTotal').innerHTML = total;
        // alert(total);
    }
   
    $('#signupform').submit(function(e) {

        // if ($('#servicoSelect').val() != '') {
        $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            type: 'POST',
            data: {
                select: $('#servicioSelect1').val(),
                select: $('#servicioSelect2').val()
            },
            url: '/reportOne/all',
            success: function(data) {
                alert(data);
            },

        });
        // } else {
        //     alert('error');
        // }
        e.preventDefault();
    });
</script>

@endsection