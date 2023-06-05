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
        if(auth()->user()->role == 'admin'){
            return view('dashboard.transaction.index', [
                'title' => 'Transaction',
                'transactions' => Transaction::latest()->get(),
            ]);
        }
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
        Alert::success('Success', 'Silahkan lakukan pembayaran');
        return redirect('/dashboard/payment');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $transactionDetails = TransactionDetail::where('transaction_id', $id)->get();
        return view('dashboard.transaction.show', [
            'title' => 'Transaction Detail',
            'transaction' => Transaction::find($id),
            'transactionDetails' => $transactionDetails,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        return view('dashboard.transaction.edit', [
            'title' => 'Edit Transaction',
            'transaction' => Transaction::find($id),
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $transaction = Transaction::find($id);
        $validateData = $request->validate([
            'status' => 'required',
        ]);
        $transaction->status = $validateData['status'];
        $transaction->save();
        Alert::success('Success', 'Data berhasil diubah');
        return redirect('/dashboard/transaction');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        Transaction::find($id)->delete();
        foreach(TransactionDetail::where('transaction_id', $id)->get() as $detail){
            $detail->delete();
        };
        Alert::success('Success', 'Data berhasil dihapus');
        return redirect('/dashboard/transaction');
    }
}
