<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Transaction;
use Illuminate\Http\Request;
use App\Models\TransactionDetail;
use RealRashid\SweetAlert\Facades\Alert;
use App\Http\Requests\StoreTransactionsRequest;
use App\Http\Requests\UpdateTransactionsRequest;

class TransactionsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        return view('dashboard.transaction.index', [
            'title' => 'Transaction',
            'transactions' => Transaction::where('user_id', auth()->user()->id)->latest()->get(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

}
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $carts = Cart::where('user_id', auth()->user()->id)->latest()->get();
        $transaction = new Transaction();
        $transaction->user_id = auth()->user()->id;
        $transaction->code = 'TRX' . mt_rand(10000, 99999);
        $transaction->total_price = $carts->sum('total_price');
        $transaction->status = 'PENDING';
        $validateData = $request->validate([
            'date_event' => 'required',
            'time_event' => 'required',
        ]);
        $transaction->date_event = $validateData['date_event'];
        $transaction->time_event = $validateData['time_event'];
        $transaction->save();
        foreach($carts as $cart){
            $detail = new TransactionDetail();
            $detail->transaction_id = $transaction->id;
            $detail->service_id = $cart->service_id;
            $detail->quantity = $cart->quantity;
            $detail->subtotal = $cart->total_price;
            $detail->save();
        };
        foreach ($carts as $cart){
            $cart->delete();
        };
        Alert::success('Success', 'Data berhasil ditambahkan');
        return redirect('/dashboard/transaction');
    }

    /**
     * Display the specified resource.
     */
    public function show(Transaction $transactions)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Transaction $transactions)
    {
        //
    }
}
