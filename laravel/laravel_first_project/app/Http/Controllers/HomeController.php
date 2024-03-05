<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $array = array(
          'id' => 1,
          'name' => 'Imran khan',
          'class' => 'Five',
          'phoneno' => 03030336465,
        );
        return view('home', compact('array'));
    }
}
