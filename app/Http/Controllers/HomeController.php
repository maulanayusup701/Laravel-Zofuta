<?php

namespace App\Http\Controllers;

use App\Models\Gor;
use App\Models\Field;
use App\Models\Payment;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {

        return view('frontend.home', [
            'title' => 'Zofuta | Home',
            'gors' => Gor::with('field')->paginate(6)
        ]);
    }
    public function show(Gor $gor, Field $field, Payment $payment)
    {
        return view('frontend.detail_gor', [
            'title' => '| Zofuta',
            'gor' => $gor,
            'schedule' => $field,
            'payment' => $payment
        ]);
    }

    public function search(Request $request)
    {
        $search = $request->input('search');
        $gors = Gor::where('nama_gor', 'LIKE', "%$search%")->with('field')->paginate(6);
        return view('frontend.home', [
            'title' => 'Zofuta | Home',
            'gors' => $gors
        ]);
    }
}
