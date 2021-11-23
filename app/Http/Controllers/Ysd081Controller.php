<?php

namespace App\Http\Controllers;
use App\Ysd081;
use Illuminate\Http\Request;

class Ysd081Controller extends Controller
{
    public function index()
    {
        $data = YSD081::paginate(10);
        // dd($records);

        return view('tables.ysd081', compact('data'));
    }
}
