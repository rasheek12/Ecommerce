<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CartController extends Controller
{
    public function summary()
    {
        return view('site.pages.cart-summary');
    }
    public function save(Request $request)
    {
        $request->validate([
            'product_variation_id'=>'required'
        ]);

        $cart=\App\Models\Cart::firstOrCreate([
            'session_Id' => session()->getId()
        ]);
        $cart->photovariations()->syncWithoutDetaching($request->product_variation_id);

        return back()->with(['SuccessMessage'=>'Product has been added to cart successfully']);
    }
    public function destroy(Request $request)
    {
        $cart = \App\Models\Cart::where('session_id',session()->getId())->first();
        $cart->photoVariations()->detach($request->id);
        return back();
    }
}
