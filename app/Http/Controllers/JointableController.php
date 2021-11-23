<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Consolidado;
class JointableController extends Controller
{
     public function index()
    {   //   DB::table('users')->truncate();
        $records =  DB::table('table_ysd080')
            ->join('table_clientes', 'table_clientes.codigo', '=', 'table_ysd080.cliente')
            ->join('table_toma_pedidos', 'table_toma_pedidos.codigo_de_cliente', '=', 'table_ysd080.cliente')
            ->select(['table_ysd080.pedido','table_ysd080.cliente','table_ysd080.razon_social',
            'table_ysd080.region_distrito','table_clientes.giro_negocio','table_clientes.direccion','table_clientes.distrito',])
            // ->distinct()
            // ->truncate()
            //->paginate(1);
            ->get();
        //dd($records);
        $consolidado = Consolidado::truncate();

        $t = 0;

        foreach ($records as $r) {
            $t = $t + 1;
            $consolidado = new Consolidado();            
            $consolidado->pedido = $r->pedido;
            $consolidado->cliente = $r->cliente;
            $consolidado->razon_social = $r->razon_social;
            $consolidado->region_distrito = $r->region_distrito;
            $consolidado->giro_negocio = $r->giro_negocio;
            $consolidado->direccion = $r->direccion;
            $consolidado->distrito = $r->distrito;            
            $consolidado->save();
            
        }

        //dd($t);
        $consolidado = Consolidado::all();
        // $consolidado->truncate();
        
        return view('tables.consolidado', compact('consolidado'));
    }

  
}












