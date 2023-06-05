<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use App\Http\Requests\StoreCategoriesRequest;
use App\Http\Requests\UpdateCategoriesRequest;

class CategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if(auth()->user()->role == 'customer'){
            abort(403);
        };
        return view('dashboard.categories.index', [
            'title' => 'Categories',
            'categories' => Category::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        if(auth()->user()->role == 'customer'){
            abort(403);
        };
        return view('dashboard.categories.create', [
            'title' => 'Create Categories',
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validateData = $request->validate([
            'name' => 'required|max:255',
            'category_code' => 'required|max:255',
        ]);

        Category::create($validateData);
        Alert::success('Success', 'Data berhasil ditambahkan');
        return redirect('/dashboard/category');
    }

    /**
     * Display the specified resource.
     */
    public function show(Category $categories)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        if(auth()->user()->role == 'customer'){
            abort(403);
        };
        return view('dashboard.categories.edit', [
            'title' => 'Edit Category',
            'category' => Category::findOrFail($id),
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $categories = Category::find($id);
        $validateData = $request->validate([
            'name' => 'required|max:255',
            'category_code' => 'required|max:255',
        ]);

        Category::where('id', $categories->id)->update($validateData);
        Alert::success('Success', 'Data berhasil diubah');
        return redirect('/dashboard/category');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        Category::find($id)->delete();
        Alert::success('Success', 'Data berhasil dihapus');
        return redirect('/dashboard/category');
    }
}
