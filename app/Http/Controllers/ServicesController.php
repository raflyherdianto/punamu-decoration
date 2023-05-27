<?php

namespace App\Http\Controllers;

use App\Models\Service;
use App\Models\Category;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
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
            'title' => 'Services',
            'services' => Service::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.services.create', [
            'title' => 'Create Services',
            'categories' => Category::all(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validateData = $request->validate([
            'name' => 'required|max:255',
            'category_id' => 'required|max:255',
            'description' => 'required|max:255',
            'price' => 'required|max:255',
            'rating' => 'max:5',
        ]);
        Service::create($validateData);
        Alert::success('Success', 'Data berhasil ditambahkan');
        return redirect('/dashboard/service');
    }

    /**
     * Display the specified resource.
     */
    public function show(Service $services)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        return view('dashboard.services.edit', [
            'title' => 'Edit Services',
            'service' => Service::findOrFail($id),
            'categories' => Category::all(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $services = Service::find($id);
        $validateData = $request->validate([
            'name' => 'required|max:255',
            'category_id' => 'required|max:255',
            'description' => 'required|max:255',
            'price' => 'required|max:255',
            'rating' => 'max:5',
        ]);
        Service::where('id', $services->id)->update($validateData);
        Alert::success('Success', 'Data berhasil diubah');
        return redirect('/dashboard/service');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        Service::find($id)->delete();
        Alert::success('Success', 'Data berhasil dihapus');
        return redirect('/dashboard/service');
    }
}
