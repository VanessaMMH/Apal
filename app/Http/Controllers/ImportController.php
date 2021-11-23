<?php

namespace App\Http\Controllers;
use App\Imports\Ysd080Import;
use App\Imports\Ysd081Import;
use App\Imports\TomaPedidosImport;
use App\Imports\ClientesImport;
use Maatwebsite\Excel\Facades\Excel;

use Illuminate\Http\Request;
use Exception;
class ImportController extends Controller
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function importYSD080View()
    {
       return view('import-ysd080');
    }
     
    /**
    * @return \Illuminate\Support\Collection
    */
    public function importYSD080() 
    {
        Excel::import(new Ysd080Import,request()->file('file'));
        return
        redirect()->route('tabla-ysd080') ->withSuccess('File uploaded successfully.'); 
    }

    /**
    * @return \Illuminate\Support\Collection
    */
    public function importYSD081View()
    {
       return view('import-ysd081');
    }
     
    /**
    * @return \Illuminate\Support\Collection
    */
    public function importYSD081() 
    {
        Excel::import(new Ysd081Import,request()->file('file'));
        return
        redirect()->route('tabla-ysd081') ->withSuccess('File uploaded successfully.');     
        
    }


    /**
    * @return \Illuminate\Support\Collection
    */
    public function importTomaPedidosView()
    {
       return view('import-toma-pedidos');
    }
     
    /**
    * @return \Illuminate\Support\Collection
    */
    public function importTomaPedidos() 
    {
        
        Excel::import(new TomaPedidosImport,request()->file('file'));
        return  
        redirect()->route('tabla-toma-pedidos') ->withSuccess('File uploaded successfully.');  

        // return back();
    }

      /**
    * @return \Illuminate\Support\Collection
    */
    public function importClientesView()
    {
       return view('import-clientes');
    }
     
    /**
    * @return \Illuminate\Support\Collection
    */
    public function importClientes() 
    {
        
        Excel::import(new ClientesImport,request()->file('file'));
        return  
        redirect()->route('tabla-clientes') ->withSuccess('File uploaded successfully.');  

        // return back();
    }
}
