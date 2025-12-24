<?php

namespace App\Http\Controllers\Common;

use App\Http\Controllers\Controller;
use App\Models\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class CartController extends Controller
{
    //
    public function CartIndex(){

        $carts = Cart::where('user_id', Auth::id())->get();
        return view('frontend.cart', compact('carts'));
    }

    // public function CartStore(Request $request)
    // {
    //     $productId = $request->input('product_id');
    //     $quantity = $request->input('quantity', 1); // Default to 1 if not provided




    //     return redirect('/')->with('success', 'Product added to cart successfully!');
    // }

    public function CartCheckout(){
        $carts = Cart::where('user_id', Auth::id())->get();
        return view('frontend.checkout', compact('carts'));
    }

    public function makeData($request)
    {
        $user = Auth::id();
        $data = [
            'user_id' => $user,
            'product_id' => $request->get('product_id'),
            'quantity' => $request->get('quantity') ?? 1,
        ];

        return $data;
    }

    // Store Cart
    public function CartStore(Request $request)
    {


        $data = $this->makeData($request);

        $userId = $data['user_id'];
        $productId = $data['product_id'];
        $cartItem = Cart::where('user_id', $userId)
        ->where('product_id', $productId)
        ->first();
        // return $cartItem->variants;

        try {
            if ($cartItem) {

                    $cartItem->quantity = $data['quantity'];

                    // return $cartItem;

                    if ($cartItem->quantity <= 0) {
                        $cartItem->delete();
                        return (('Cart item removed successfully.'));
                    } else {
                        $cartItem->save();
                        return (('Quantity updated successfully.'));
                    }

            } else{
                // Create new cart item if quantity is positive
            Cart::create($data);
            return (('Product added to cart successfully.'));
            }
        } catch (\Exception $e) {
            return ($e->getMessage());
        }
    }

    // Update Cart
    public function CartUpdate(Request $request, $id)
    {
        $cartItem = Cart::findOrFail($id);
        $cartItem->quantity = $request->input('quantity');
        $cartItem->save();
        return redirect()->back()->with('success', 'Quantity updated successfully.');
    }

}
