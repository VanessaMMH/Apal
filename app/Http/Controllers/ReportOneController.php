<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReportOneController extends Controller
{
    public function index()
    {
        return view('reportOne');
    }

    public function all(Request $request)
    {
//         $servicios=\DB::table('servicios')
// ->select('values.*')
// ->get();
// return response(json_encode($values),200)->header('Content-type','text/plain');
        return "hola";
    } 

    public function update(Request $request)
    {
       

        return redirect()->route('home')->withSuccess('Profile updated successfully.');
    }

}
