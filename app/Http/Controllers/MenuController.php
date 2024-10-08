<?php

namespace App\Http\Controllers;

use App\Models\Grilled;
use App\Models\Sizzling;
use App\Models\SteakBliss;

class MenuController extends Controller
{
    public function menu()
    {
        $grilledmeat = Grilled::all();
        $sizzlingfoods = Sizzling::all();
        $steakmeal = SteakBliss::all();

        return view('menu',compact('grilledmeat','sizzlingfoods','steakmeal'));

        // return view('menu');
    }
}
