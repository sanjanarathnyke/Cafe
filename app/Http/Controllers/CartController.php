<?php

namespace App\Http\Controllers;

use App\Models\Burger;
use App\Models\Cake;
use App\Models\Chicken;
use App\Models\Grilled;
use App\Models\pizza;
use App\Models\Shushi;
use App\Models\Sizzling;
use App\Models\Steak;
use App\Models\SteakBliss;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function addtocart(Request $request)
    {

        // $meal = Chicken::find($request->meal_id);

        if ($request->meal_type == 'chicken') {
            $meal = Chicken::find($request->meal_id);
        } elseif ($request->meal_type == 'sushi') {
            $meal = Shushi::find($request->meal_id);
        } elseif ($request->meal_type == 'pizza') {
            $meal = pizza::find($request->meal_id);
        } elseif ($request->meal_type == 'burger') {
            $meal = Burger::find($request->meal_id);
        } elseif ($request->meal_type == 'steak') {
            $meal = Steak::find($request->meal_id);
        } elseif ($request->meal_type == 'cake') {
            $meal = Cake::find($request->meal_id);
        } elseif ($request -> meal_type == 'grilled'){
            $meal = Grilled::find($request->meal_id);
        } elseif ($request->meal_type == 'sizzling'){
            $meal = Sizzling::find($request->meal_id);
        } elseif ($request->meal_type == 'steakbliss'){
            $meal = SteakBliss::find($request->meal_id);
        }

        if ($meal) {
            $cart = session()->get('cart', []);

            // Use a unique key for each meal type and meal ID
            $meal_key = $request->meal_type . '_' . $meal->id;

            // If the meal is already in the cart, update its quantity
            if (isset($cart[$meal_key])) {
                $cart[$meal_key]['quantity']++;
            } else {
                // Otherwise, add the meal to the cart
                $cart[$meal_key] = [
                    'name' => $meal->name,
                    'price' => $meal->price,
                    'image' => $meal->image_path,
                    'quantity' => 1
                ];
            }

            session()->put('cart', $cart);

            return redirect()->route('cart');
        } else {
            return redirect()->back()->with('error', 'Meal not found.');
        }

        // return view('cart');
    }

    public function cart()
    {

        // Retrieve the cart from the session
        $cart = session()->get('cart', []);

        // Return the view with cart data
        return view('cart', compact('cart'));
    }

    public function removefromcart($id)
    {
        $cart = session()->get('cart');

        // Check if the item exists in the cart
        if (isset($cart[$id])) {
            unset($cart[$id]);  // Remove the item from the cart
            session()->put('cart', $cart); // Update the cart session
        }
        // Redirect back to the cart page
        return redirect()->route('cart')->with('success', 'Item removed from cart.');
    }
}
