<?php

namespace Bibliophile\Http\Controllers;
use Bibliophile\Cart;
use Bibliophile\Product;
use Illuminate\Http\Request;
use Bibliophile\Http\Requests;
use Session;

class ProductController extends Controller
{
    public function getIndex()
    {
    	$products = Product::all();
    	return view('catalog.imagegallery',['products'=>$products]);
    }

    public function getAddToCart(Request $request, $id){
    	$product = Product::find($id);
    	$oldCart = Session::has('cart') ? Session::get('cart') : null;
    	$cart=new Cart($oldCart);
    	$cart->add($product,$product->id);

    	$request->session()->put('cart',$cart);
    	return redirect()->route('product.index');
    }
    public function getCart(){
    	if(!Session::has('cart')){
    		return view('shop.shopping-cart');
    	}
    	$oldCart=Session::get('cart');
    	$cart=new Cart($oldCart);
    	return view('shop.shopping-cart',['products'=>$cart->items,'totalPrice'=>$cart->totalPrice]);
    }
    public function destroy()
    {
    	Session::flush();
    	return redirect()->to('index');
    }
    public function removefromcart(Request $request,$id){
    	$product = Product::find($id);
    	$oldCart = Session::has('cart') ? Session::get('cart') : null;
    	$cart=new Cart($oldCart);
    	$cart->remove($product,$product->id);

    	$request->session()->put('cart',$cart);
    	return redirect()->route('product.index');
    }
}
