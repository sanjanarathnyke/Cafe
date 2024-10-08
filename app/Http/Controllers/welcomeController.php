<?php

namespace App\Http\Controllers;

use App\Models\Burger;
use App\Models\Cake;
use App\Models\Chicken;
use App\Models\pizza;
use App\Models\Shushi;
use App\Models\Steak;

class welcomeController extends Controller
{
    public function welcome()
    {

        $shushiRolls = Shushi::all();

        $pizzapies = pizza::all();

        $burgerbuns = Burger::all();

        $steakmeat = Steak::all();

        $chickenmeals = Chicken::all();

        $cakeitems = Cake::all();
        
        return view('welcome', compact('shushiRolls', 'pizzapies', 'burgerbuns', 'steakmeat', 'chickenmeals','cakeitems'));

        // Return the welcome view
        // return view('welcome');
    }
}
