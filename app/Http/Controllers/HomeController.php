<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index()
    {
        return view('frontend.home', [
            'title' => 'Zofuta | Zona Futsal Purwakarta',
            'gors' => DB::table('gors')->paginate(9)
        ]);
    }
}
