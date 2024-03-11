<?php

namespace App\Http\Controllers;

use App\Models\Employees;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $array = Employees::where('id', 1)->get();

        return view('home', compact('array'));
    }

    public function services()
    {
        return view('services');
    }
    public function addServices(Request $request)
    {
        $data = $request->all();
        echo '<pre>';
        print_r($data);

    }
}
