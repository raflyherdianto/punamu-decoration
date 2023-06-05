<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\StoreCartsRequest;
use RealRashid\SweetAlert\Facades\Alert;
use App\Http\Requests\UpdateCartsRequest;

class CartsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.cart.index', [
            'title' => 'Cart',
            'carts' => Cart::where('user_id', Auth::user()->id)->latest()->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        if(auth()->user()->verified == 0){
            Alert::error('Error', 'Silahkan verifikasi profil terlebih dahulu');
            return back();
        };
        return view('dashboard.cart.create', [
            'title' => 'Create Cart',
            'services' => Service::all(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validateData = $request->validate([
            'service_id' => 'required',
            'quantity' => 'required|max:255|numeric',
        ]);
        $validateData['user_id'] = auth()->user()->id;
        $validateData['total_price'] = Service::find($validateData['service_id'])->price * $validateData['quantity'];
        Cart::create($validateData);
        Alert::success('Success', 'Data berhasil ditambahkan');
        return redirect('/dashboard/cart');
    }

    /**
     * Display the specified resource.
     */
    public function show(Cart $carts)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        return view('dashboard.cart.edit', [
            'title' => 'Edit Cart',
            'services' => Service::all(),
            'cart' => Cart::find($id),
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $validateData = $request->validate([
            'service_id' => 'required',
            'quantity' => 'required|max:255|numeric',
        ]);
        $validateData['user_id'] = auth()->user()->id;
        $validateData['total_price'] = Service::find($validateData['service_id'])->price * $validateData['quantity'];
        Cart::find($id)->update($validateData);
        Alert::success('Success', 'Data berhasil diubah');
        return redirect('/dashboard/cart');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        Cart::find($id)->delete();
        Alert::success('Success', 'Data berhasil dihapus');
        return redirect('/dashboard/cart');
    }
}
