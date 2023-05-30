<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Regency;
use App\Models\District;
use App\Models\Province;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use RealRashid\SweetAlert\Facades\Alert;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.users.index', [
            'title' => 'Customers',
            'customers' => User::where('role', 'customer')->latest()->get(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.users.create', [
            'title' => 'Create Customer',
            'provinces' => Province::all(),
            'regencies' => Regency::all(),
            'districts' => District::all(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validateData = $request->validate([
            'name' => 'required|max:255',
            'username' => 'required|max:255',
            'email' => 'required|email|max:255',
            'gender' => 'required',
            'province_id' => 'required',
            'regency_id' => 'required',
            'district_id' => 'required',
            'address' => 'required|max:255',
            'zip_code' => 'required|max:255',
            'phone' => 'required|max:255',
            'password' => 'required|min:8',
            'bank_name' => 'max:10',
            'bank_account' => 'max:20',
            'photo' => 'image|file|max:2048',
        ]);
        if ($request->file('photo')){
            $validateData['photo'] = $request->file('photo')->store('image-user');
        }
        $validateData['password'] = Hash::make($request->password);

        User::create($validateData);
        $user = User::where('username', $request->username)->first();
        $user -> role = 'customer';
        $user -> update();
        if($user->bank_name && $user->bank_account != null){
            $user->verified = 1;
            $user->update();
        }
        Alert::success('Success', 'Data berhasil ditambahkan');
        return redirect('/dashboard/customer');

    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        return view('dashboard.users.edit', [
            'title' => 'Edit Customer',
            'provinces' => Province::all(),
            'regencies' => Regency::all(),
            'districts' => District::all(),
            'user' => User::findOrFail($id),
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $customer = User::findOrFail($id);
        $rules = [
            'name' => 'required|max:255',
            'username' => 'required|max:255',
            'email' => 'required|email|max:255',
            'gender' => 'required',
            'province_id' => 'required|integer',
            'regency_id' => 'required|integer',
            'district_id' => 'required|integer',
            'address' => 'required|max:255',
            'zip_code' => 'required|max:255',
            'phone' => 'required|max:255',
            'password' => 'required|min:8',
            'photo' => 'image|file|max:2048',
            'bank_name' => 'max:10',
            'bank_account' => 'max:20',
        ];

        $validateData = $request->validate($rules);

        if ($request->file('photo')){
            if ($request->oldImage) {
                Storage::delete($request->oldImage);
            }
            $validateData['photo'] = $request->file('photo')->store('image-user');
        }

        User::where('id', $customer->id)->update($validateData);
        $user = User::where('username', $request->username)->first();
        if($user->bank_name && $user->bank_account != null){
            $user->verified = 1;
            $user->update();
        }
        Alert::success('Success', 'Data berhasil diubah');
        return redirect('/dashboard/customer');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        User::find($id)->delete();
        Alert::success('Success', 'Data berhasil dihapus');
        return redirect('/dashboard/customer');
    }
}
