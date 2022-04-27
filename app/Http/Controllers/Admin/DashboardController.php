<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\{Gaji, User, Gender, Level};

class DashboardController extends Controller
{
    public function index()
    {
        return view('admin.dashboard', [
            'user' => User::get(),
            'genders' => Gender::all(),
            'gaji' => Gaji::all(),
            'active' => 'dashboard'
        ]);
    }
}
