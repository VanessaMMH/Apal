@extends('layouts.admin')



@section('main-content')

    <!-- Page Heading -->

    <h1 class="h3 mb-4 text-gray-800">{{ __('Tabla Clientes') }}</h1>

    @if (session('success'))
        <div class="alert alert-success border-left-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif

    <div class="row justify-content-center">



        <div class="col-lg-12">

            <!-- DataTales Example -->

            <div class="card shadow mb-4">

                <div class="card-body">

                    <div class="table-responsive">

                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">

                            <thead>

                                <tr>
                                    <th>ciudad</th>

                                    <th>codigo</th>

                                    <th>nombre</th>

                                    <th>direccion</th>

                                    <th>distrito</th>

                                    <th>dni_ruc</th>

                                    <th>giro_negocio</th>

                                    <th>subcanal</th>

                                    <th>segmento</th>

                                    <th> telefono01</th>

                                    <th> telefono02</th>
                                    <th>telefono03 </th>
                                    <th>ruta_llamada </th>
                                    <th>dia_llamada </th>
                                    <th>frecuencia </th>
                                    <th> ruta_vista</th>
                                    <th> dia_vista</th>
                                    <th>frecuencia_vista </th>
                                    <th>secuencia_vista </th>
                                    <th>longitud </th>
                                    <th>latitud </th>
                                    <th>fecha_alta </th>
                                    <th> cod_dist</th>


                                </tr>

                            </thead>

                            <tfoot>

                            <tr>
                                    <th>ciudad</th>

                                    <th>codigo</th>

                                    <th>nombre</th>

                                    <th>direccion</th>

                                    <th>distrito</th>

                                    <th>dni_ruc</th>

                                    <th>giro_negocio</th>

                                    <th>subcanal</th>

                                    <th>segmento</th>

                                    <th> telefono01</th>

                                    <th> telefono02</th>
                                    <th>telefono03 </th>
                                    <th>ruta_llamada </th>
                                    <th>dia_llamada </th>
                                    <th>frecuencia </th>
                                    <th> ruta_vista</th>
                                    <th> dia_vista</th>
                                    <th>frecuencia_vista </th>
                                    <th>secuencia_vista </th>
                                    <th>longitud </th>
                                    <th>latitud </th>
                                    <th>fecha_alta </th>
                                    <th> cod_dist</th>


                                </tr>
                            </tfoot>

                            <tbody>

                                @foreach ($clients as $client)

                                    <tr>
                                        <td>{{$client->ciudad}}</td>

                                        <td>{{$client->codigo}}</td>

                                        <td>{{$client->nombre}}</td>

                                        <td>{{$client->direccion}}</td>

                                        <td>{{$client->distrito}}</td>

                                        <td>{{$client->dni_ruc	}}</td>

                                        <td>{{$client->giro_negocio}}</td>

                                        <td>{{$client->subcanal}}</td>

                                        <td>{{$client->segmento}}</td>

                                        <td>{{$client->telefono01}}</td>

                                        <td>{{$client->telefono02 }}</td>

                                        <td>{{$client-> telefono03}}</td>

                                        <td>{{$client->ruta_llamada }}</td>

                                        <td>{{$client->dia_llamada }}</td>

                                        <td>{{$client->frecuencia }}</td>

                                        <td>{{$client-> ruta_vista}}</td>

                                        <td>{{$client->dia_vista }}</td>

                                        <td>{{$client->frecuencia_vista }}</td>

                                        <td>{{$client->secuencia_vista	 }}</td>

                                        <td>{{$client->longitud }}</td>

                                        <td>{{$client->latitud	 }}</td>

                                        <td>{{$client->fecha_alta	 }}</td>

                                        <td>{{$client->cod_dist	 }}</td>

                                    </tr>

                                @endforeach

                            </tbody>

                        </table>

                       

                    </div>

                </div>

            </div>

        </div>



    </div>



@endsection


@section('scripts')
<script>
    $(document).ready(function(){
        $('#dataTable').DataTable({
                responsive: true,
                    // order: [[ 0, "asc" ]]
                searchPanes:{
                   
                    cascadePanes:true,
                    dtOpts:{
                        dom:'tp',
                        paging:'true',
                        pagingType:'numbers',
                        searching:false
                    }
                },                
                dom:'Pfrtip',
                columnDefs:[{
                    searchPanes:{
                        show:false
                    },
                    // targets:[5] // Indica que colummna no se debe cargar en el panel de busqueda
                }
                ]
        });

    });
</script>
@endsection


