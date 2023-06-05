<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Transaction;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function index(){
        return view('dashboard.transaction.payment', [
            'title' => 'Payment',
            'payment' => User::where('role', 'admin')->latest()->first(),
            'transaction' => Transaction::where('user_id', auth()->user()->id)->latest()->first(),
        ]);
    }
}
