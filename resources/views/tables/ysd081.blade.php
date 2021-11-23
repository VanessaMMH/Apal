@extends('layouts.admin')



@section('main-content')

<!-- Page Heading -->

<h1 class="h3 mb-4 text-gray-800">{{ __('Tabla YSD081') }}</h1>

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

                                    <th>claPed</th>

                                    <th>Cliente</th>
                                    
                                    <th>Razón Social</th>
                                    
                                    <th>descripcion_motivo</th>

                                    <th>fe_pref_entrg</th>
                                    
                                    <th>CanPed-TM</th>

                                    <th>Importe</th>                                  
                                    
                                </tr>

                            </thead>

                            <tfoot>
                                
                                <tr>

                                    <th>claPed</th>

                                    <th>Cliente</th>

                                    <th>Razón Social</th>
                                    
                                    <th>descripcion_motivo</th>

                                    <th>fe_pref_entrg</th>

                                    <th>CanPed-TM</th>
                                    
                                    <th>Importe</th>                                  

                                 </tr>
                                </tfoot>

                            <tbody>
                                
                                @foreach ($data as $d)

                                <tr>
                                    
                                        <td>{{$d->claPed}}</td>
                                        
                                        <td>{{$d->cliente}}</td>

                                        <td>{{$d->razon_social}}</td>

                                        <td>{{$d->descripcion_motivo}}</td>

                                        <td>{{$d->fe_pref_entrg}}</td>

                                        <td>{{$d->canPed_TM}}</td>
                                        
                                        <td>{{$d->importe}}</td>
                                        

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
                    cascadePanes:true, //Selecciona automaticamente items en cascada
                    dtOpts:{
                        dom:'tp',
                        paging:'true',
                        pagingType:'simple', //numbers
                        searching:false

                    }
                }
                ,
                dom:'Pfrtip'
                ,
                columnDefs:[{
                    searchPanes:{
                        show:false
                    }
                    ,
                    targets:[2,5] // Indica que colummna no se debe cargar en el panel de busqueda
                }
                ]
        });

    });
</script>
@endsection