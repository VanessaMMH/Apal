<?php

namespace App\Http\Controllers;

use App\Clientes;
use Illuminate\Http\Request;

class ClientesController extends Controller
{
    public function index()
    {
        $clients = CLIENTES::get();
        return view('tables.clientes', compact('clients'));
    }
}
