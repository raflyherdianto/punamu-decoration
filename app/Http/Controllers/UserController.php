<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Regency;
use App\Models\District;
use App\Models\Province;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use RealRashid\SweetAlert\Facades\Alert;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.users.profile', [
            'title' => 'Profile',
            'provinces' => Province::all(),
            'regencies' => Regency::all(),
            'districts' => District::all(),
            'user' => auth()->user(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
    public function edit(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        $user = User::find(auth()->user()->id);
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

        User::where('id', $user->id)->update($validateData);
        $user = User::where('username', $request->username)->first();
        if($user->bank_name && $user->bank_account != null){
            $user->verified = 1;
            $user->update();
        }
        Alert::success('Success', 'Data berhasil diubah');
        return redirect('/dashboard/profile');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        //
    }
}
