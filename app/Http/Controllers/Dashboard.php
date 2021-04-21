<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class Dashboard extends Controller
{
    public function resources(){
        $userCount = User::count();
        return view('admin.dashboard', compact('userCount'));

    }
}
