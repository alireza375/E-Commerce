<?php

namespace App\Http\Controllers\Common;

use App\Http\Controllers\Controller;
use App\Models\Cart;
use Illuminate\Container\Attributes\Auth;
use Illuminate\Http\Request;

class CartController extends Controller
{
    //
    public function CartIndex(){
        return view('frontend.cart');
    }

    public function CartStore(Request $request)
    {
        $productId = $request->input('product_id');
        $quantity = $request->input('quantity', 1); // Default to 1 if not provided




        return redirect('/')->with('success', 'Product added to cart successfully!');
    }

    public function makeData($request)
    {
        $user = Auth::guard('checkUser')->user()->id;
        $data = [
            'user_id' => $user,
            'product_id' => $request->get('product_id'),
            'quantity' => $request->get('quantity') ?? 1,
        ];

        return $data;
    }

    // Store Cart
    public function store(Request $request)
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
            return (('Cart item added successfully.'));
            }
        } catch (\Exception $e) {
            return ($e->getMessage());
        }
    }
}
