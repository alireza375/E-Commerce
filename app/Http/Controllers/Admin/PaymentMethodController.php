<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\PaymentMethod;
use Illuminate\Http\Request;

class PaymentMethodController extends Controller
{
    //
    public function AllPaymentMethod(){
        $paymentMethods = PaymentMethod::all();
        return view('backend.paymentMethod.index', compact('paymentMethods'));
    }

}
