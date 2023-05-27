<?php

namespace App\Http\Controllers;

use App\Models\District;
use App\Models\User;
use App\Models\Province;
use App\Models\Regency;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use RealRashid\SweetAlert\Facades\Alert;

class RegisterController extends Controller
{
    public function index()
    {
        return view('auth.register', [
            'title' => 'Register',
            'provinces' => Province::all(),
            'regencies' => Regency::all(),
            'districts' => District::all(),
        ]);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
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
            'password' => 'required',
        ]);

        $validatedData['password'] = Hash::make($request->password);
        $validatedData['role'] = 'customer';

        User::create($validatedData);

        if(User::where('username', $request->username)->first()){
            Alert::success('Registrasi berhasil!', 'Silahkan login.');
            return redirect('/login');
        }

        Alert::error('Registrasi gagal!', 'Silahkan isi data dengan benar.');
        return back();
    }
}
