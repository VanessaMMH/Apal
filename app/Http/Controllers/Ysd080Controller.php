<?php

namespace App\Http\Controllers;

use App\Ysd080;
use Illuminate\Http\Request;

class Ysd080Controller extends Controller
{
    public function index()
    {
        $records = YSD080::get();
        return view('tables.ysd080', compact('records'));

    }
}

// class ClientsController extends Controller
// {
//     public function index()
//     {
//         $records = CLIENTS::paginate();
//         return view('clients', compact('records'));
//     }
// }
