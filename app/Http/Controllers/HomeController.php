<?php

namespace App\Http\Controllers;

use App\Models\Gor;
use App\Models\Field;

class HomeController extends Controller
{
    // public function index()
    // {
    //     return view('frontend.home', [
    //         'title' => 'Home | Zofuta',
    //         'gors' => Gor::with('field')->paginate(6)
    //     ]);
    // }
    public function index()
    {
        return view('frontend.home', [
            'title' => 'font',
            'gors' => Gor::with('field')->paginate(6)
        ]);
    }
    public function show(Gor $gor, Field $field)
    {
        return view('frontend.tes', [
            'title' => '| Zofuta',
            'gor' => $gor,
            'schedule' => $field
        ]);
    }
}
