<?php

namespace App\Http\Controllers;

use App\Models\Gor;
use Illuminate\Http\Request;

class role extends Controller
{
    public function role()
    {
        return $role = Gor::with('field')->get();
    }
}
