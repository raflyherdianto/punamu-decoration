<?php

namespace App\Http\Controllers;

use App\Models\Service;
use App\Models\ImageService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use RealRashid\SweetAlert\Facades\Alert;
use App\Http\Requests\StoreImageServicesRequest;
use App\Http\Requests\UpdateImageServicesRequest;

class ImageServicesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.image-services.index', [
            'title' => 'Image Services',
            'image_services' => ImageService::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.image-services.create', [
            'title' => 'Create Image Services',
            'services' => Service::all(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validateData = $request->validate([
            'service_id'=>'required',
            'image'=>'image|file|max:2048',
        ]);

        if ($request->file('image')){
            $validateData['image'] = $request->file('image')->store('image-services');
        }

        ImageService::create($validateData);
        Alert::success('Success', 'Gambar berhasil ditambahkan');
        return redirect('/dashboard/image-service');
    }

    /**
     * Display the specified resource.
     */
    public function show(ImageService $imageServices)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        return view('dashboard.image-services.edit', [
            'title' => 'Edit Image Services',
            'image_service' => ImageService::find($id),
            'services' => Service::all(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $imageService = ImageService::find($id);
        $rules = [
            'service_id' => 'required',
            'image'=>'image|file|max:2048',
        ];

        $validateData = $request->validate($rules);

        if ($request->file('image')){
            if ($request->oldImage) {
                Storage::delete($request->oldImage);
            }
            $validateData['image'] = $request->file('image')->store('image-services');
        }

        ImageService::where('id', $imageService->id)->update($validateData);
        Alert::success('Success', 'Gambar berhasil diubah');
        return redirect('/dashboard/image-service');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $imageService = ImageService::find($id);
        if ($imageService->image) {
            Storage::delete($imageService->image);
        }
        ImageService::destroy($imageService->id);
        Alert::success('Success', 'Gambar berhasil dihapus');
        return redirect('/dashboard/image-service');
    }
}
