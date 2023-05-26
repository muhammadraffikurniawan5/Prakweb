<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    // properti 1 dengan mama index
    public function index(){
        return view('admin.dashboard');
    }
}
