<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardAdminController extends Controller
{
    public function index()
    {
        return view('backend.dev.index', [
            'title' => 'Dashboard | Zofuta',
            'countUsers' => DB::table('users')->where('role_id', '3')->get()->count(),
            'countGors' => DB::table('gors')->get()->count(),
            'countfields' => DB::table('fields')->get()->count()
        ]);
    }
}
