<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|min:3|max:25',
            'email' => 'required|email:dns|',
            'subject' => 'required|min:3|max:25',
            'message' => 'required|min:5|max:255'
        ]);
        User::create($data);
    }
}
