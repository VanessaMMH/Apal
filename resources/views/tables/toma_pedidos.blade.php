@extends('layouts.admin')



@section('main-content')

    <!-- Page Heading -->

    <h1 class="h3 mb-4 text-gray-800">{{ __('Tabla TOMA DE PEDIDOS') }}</h1>

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
                                    <th>fecha</th>

                                    <th>numero_de_pedido</th>

                                    <th>codigo_de_cliente</th>

                                    <th>nombre_de_cliente</th>

                                    <th>direccion</th>

                                    <th>distrito</th>

                                    <th>ruta_de_campo</th>

                                    <th>ruta_de_llamada</th>

                                    <th>importe_de_venta</th>

                                    <th> usuario_inicial</th>

                                    <th> usuario_final</th>

                                </tr>

                            </thead>

                            <tfoot>

                               <tr>
                                    <th>fecha</th>

                                    <th>numero_de_pedido</th>

                                    <th>codigo_de_cliente</th>

                                    <th>nombre_de_cliente</th>

                                    <th>direccion</th>

                                    <th>distrito</th>

                                    <th>ruta_de_campo</th>

                                    <th>ruta_de_llamada</th>

                                    <th>importe_de_venta</th>

                                    <th> usuario_inicial</th>

                                    <th> usuario_final</th>

                                </tr>
                            </tfoot>

                            <tbody>

                                @foreach ($items as $item)

                                    <tr>
                                        <td>{{$item->fecha_creacion}}</td>

                                        <td>{{$item->numero_de_pedido}}</td>

                                        <td>{{$item->codigo_de_cliente}}</td>

                                        <td>{{$item->nombre_de_cliente}}</td>

                                        <td>{{$item->direccion}}</td>

                                        <td>{{$item->distrito}}</td>

                                        <td>{{$item->ruta_de_campo}}</td>

                                        <td>{{$item->ruta_de_llamada}}</td>

                                        <td>{{$item->importe_de_venta}}</td>

                                        <td>{{$item->usuario_inicial}}</td>

                                        <td>{{$item->usuario_final}}</td>

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

