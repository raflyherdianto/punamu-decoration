<?php

namespace App\Http\Controllers;

use App\Models\Service;
use App\Models\Favorite;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use App\Http\Requests\StoreFavoritesRequest;
use App\Http\Requests\UpdateFavoritesRequest;

class FavoritesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.favorite.index', [
            'title' => 'Favorites',
            'favorites' => Service::join('favorites', 'services.id', '=', 'favorites.service_id')
                ->join('image_services', 'services.id', '=', 'image_services.service_id')
                ->where('favorites.user_id', '=', auth()->user()->id)
                ->get(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.favorite.create', [
            'title' => 'Create Favorite',
            'services' => Service::all(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $favorite = new Favorite();
        $validateData = $request->validate([
            'service_id' => 'required',
        ]);
        $favorite->service_id = $validateData['service_id'];
        $favorite->user_id = auth()->user()->id;
        $favorite->status = 1;
        $favorite->save();
        Alert::success('Success', 'Data berhasil ditambahkan!');
        return redirect('/dashboard/favorite');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
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
    public function destroy($id)
    {
        Favorite::find($id)->delete();
        Alert::success('Success', 'Data berhasil dihapus!');
        return redirect('/dashboard/favorite');
    }
}
