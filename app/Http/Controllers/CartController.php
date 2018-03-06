<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Gloudemans\Shoppingcart\Facades\Cart;
use App\Product;

class CartController extends Controller
{
    public function __construct(){
        parent::__construct();
        $this->middleware('auth');
    }

    public function index()
    {
    	$cartItems = Cart::content();
    	return view('cart/index')->with('cartItems', $cartItems);
    }

    public function addItem($id)
    {
		//return $id;
		$products = Product::find($id);
		Cart::add($id, $products->title, 1 , $products->price);
		return redirect('cart');
    }

    public function destroy($rowId)
    {
    	Cart::remove($rowId);
    	return back();
    }

    public function update(Request $request, $id)
    {
        Cart::update($id,$request->qty);
        return back();
    }
}
