<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PackagesController extends Controller
{
    public function packages()
    {
        return view('packages');
    }
}
