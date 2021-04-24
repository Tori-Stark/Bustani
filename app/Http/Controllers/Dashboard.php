<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Product;
use Illuminate\Http\Request;

class Dashboard extends Controller
{
    public function resources(){
        $userCount = User::count();
        $productCount= Product::count();
        return view('admin.dashboard', compact('userCount','productCount'));

    }
}
