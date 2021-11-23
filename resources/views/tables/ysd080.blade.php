@extends('layouts.admin')

@section('main-content')

    <!-- Page Heading -->

    <h1 class="h3 mb-4 text-gray-800">{{ __('Tabla YSD080') }}</h1>

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

                                    <th>Pedido</th>

                                    <th>Fecha de Creación</th>

                                    <th>Cliente</th>

                                    <th>Razón Social</th>

                                    <th>CanPe</th>

                                    <th>CanPed-TM</th>

                                    <th>Importe</th>

                                    <th>Región/Distrito</th>

                                </tr>

                            </thead>

                            <tfoot>

                                <tr>

                                    <th>Pedido</th>

                                    <th>Fecha de Creación</th>

                                    <th>Cliente</th>

                                    <th>Razón Social</th>

                                    <th>CanPe</th>

                                    <th>CanPed-TM</th>

                                    <th>Importe</th>

                                    <th>Región/Distrito</th>

                                </tr>

                            </tfoot>

                            <tbody>

                                @foreach ($records as $record)

                                    <tr>

                                        <td>{{$record->pedido}}</td>

                                        <td>{{$record->fecha_creacion}}</td>

                                        <td>{{$record->cliente}}</td>

                                        <td>{{$record->razon_social}}</td>

                                        <td>{{$record->can_ped}}</td>

                                        <td>{{$record->can_ped_tm}}</td>

                                        <td>{{$record->importe}}</td>

                                        <td>{{$record->region_distrito}}</td>

                                    </tr>

                                @endforeach

                            </tbody>

                        </table>
                        
                        <!--{ { $records->links() }} -->

                    </div>

                </div>

            </div>

        </div>



    </div>

@endsection

@section('scripts')
<!-- <script>
    $(document).ready( function () {
        
        $('#dataTablecddd').delay(10000).DataTable({     
            language: { "url": "//cdn.datatables.net/plug-ins/1.10.16/i18n/Spanish.json" },     
            responsive: true,
            pageLength: 10
            // order: [[ 0, "asc" ]]
        });
    } );
</script> -->
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

