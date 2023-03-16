<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index()
    {
        return view('frontend.profile', [
            'title' => 'Profile',
            'order' => Order::where('user_id', auth()->user()->id)->get()
        ]);
    }
}
