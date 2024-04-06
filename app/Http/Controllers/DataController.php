<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DataController extends Controller
{
    public function getData()
    {
        $name = DB::table('points')->get();
        return view('index', ['name' => $name, "x"=> "x", "y"=> "y"]);
    }
}
