<?php

namespace App\Http\Controllers;

use App\Models\Services;
use App\Models\Categories;
use Illuminate\Http\Request;
use App\Http\Requests\StoreServicesRequest;
use App\Http\Requests\UpdateServicesRequest;

class ServicesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.services.index', [
            'services' => Services::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.services.create', [
            'categories' => Categories::all(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validateData = $request->validate([
            'name' => 'required|max:255',
            'categories_id' => 'required|max:255',
            'description' => 'required|max:255',
            'price' => 'required|max:255',
        ]);
        Services::create($validateData);
        return redirect('/dashboard/service')->with('success', 'Data berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Services $services)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        return view('dashboard.services.edit', [
            'services' => Services::findOrFail($id),
            'categories' => Categories::all(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $services=Services::find($id);
        $validateData = $request->validate([
            'name' => 'required|max:255',
            'categories_id' => 'required|max:255',
            'description' => 'required|max:255',
            'price' => 'required|max:255',
        ]);
        Services::where('id', $services->id)->update($validateData);
        return redirect('/dashboard/service')->with('success', 'Data berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        Services::find($id)->delete();
        return redirect('/dashboard/service')->with('success', 'Data berhasil dihapus');
    }
}
