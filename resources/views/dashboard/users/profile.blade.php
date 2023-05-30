@extends('dashboard.layouts.main')

@section('container')
    <div class="page-heading">
        <div class="page-title">
            <div class="row">
                <div class="col-12 col-md-6 order-md-1 order-last mb-2">
                    <h3>Edit Profile</h3>
                </div>
                <div class="col-12 col-md-6 order-md-2 order-first">
                    <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="{{ url('dashboard') }}">Dashboard</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">
                                Edit Profile
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>

            <section id="multiple-column-form">
                <div class="row match-height">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-content">
                                <div class="card-body">
                                    <form action="{{ url('dashboard/profile/'.$user->id) }}" method="POST" class="form" enctype="multipart/form-data">
                                        @method('PUT')
                                        @csrf
                                        <div class="row">
                                            <div class="col-md-6 col-12">
                                                <div class="form-group">
                                                    <label for="first-name-column">Nama User</label>
                                                    <input type="text"
                                                        class="form-control
                                                        @error('name') is-invalid @enderror"
                                                        id="name" name="name"
                                                        value="{{ old('name', $user->name) }}">
                                                    @error('name')
                                                        <div class="text-danger">
                                                            {{ $message }}
                                                        </div>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-12">
                                                <div class="form-group">
                                                    <label for="first-name-column">Username</label>
                                                    <input type="text"
                                                        class="form-control
                                                        @error('username') is-invalid @enderror"
                                                        id="username" name="username"
                                                        value="{{ old('username', $user->username) }}">
                                                    @error('username')
                                                        <div class="text-danger">
                                                            {{ $message }}
                                                        </div>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-12">
                                                <div class="form-group">
                                                    <label for="first-name-column">Password</label>
                                                    <input type="password"
                                                        class="form-control
                                                        @error('password') is-invalid @enderror"
                                                        id="password" name="password"
                                                        value="{{ old('password', $user->password) }}">
                                                    @error('password')
                                                        <div class="text-danger">
                                                            {{ $message }}
                                                        </div>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-12">
                                                <div class="form-group">
                                                    <label for="first-name-column">Email</label>
                                                    <input type="email"
                                                        class="form-control
                                                        @error('email') is-invalid @enderror"
                                                        id="email" name="email"
                                                        value="{{ old('email', $user->email) }}">
                                                    @error('email')
                                                        <div class="text-danger">
                                                            {{ $message }}
                                                        </div>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-12">
                                                <div class="form-group">
                                                    <label for="first-name-column">Jenis Kelamin</label>
                                                    <select
                                                        class="choices form-select @error('gender') is-invalid @enderror"
                                                        id="gender" name="gender">
                                                        <option selected>Jenis kelamin...</option>
                                                        @if (old('gender', $user->gender) == "L")
                                                         <option value="L" selected>Laki-laki</option>
                                                        <option value="P">Perempuan</option>
                                                        @else
                                                        <option value="L">Laki-laki</option>
                                                        <option value="P" selected>Perempuan</option>
                                                        @endif
                                                    </select>
                                                    @error('gender')
                                                        <div class="text-danger">
                                                            {{ $message }}
                                                        </div>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-12">
                                                <div class="form-group">
                                                    <label for="first-name-column">Provinsi</label>
                                                    <select
                                                        class="choices form-select @error('province_id') is-invalid @enderror"
                                                        id="province_id" name="province_id">
                                                        <option selected>Provinsi</option>
                                                        @foreach ($provinces as $province)
                                                        @if (old('province_id', $province->id) == $user->province_id)
                                                        <option selected value="{{ $province->id }}">{{ $province->name }}</option>
                                                    @else
                                                        <option value="{{ $province->id }}">{{ $province->name }}</option>
                                                    @endif
                                                        @endforeach
                                                    </select>
                                                    @error('province_id')
                                                        <div class="text-danger">
                                                            {{ $message }}
                                                        </div>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-12">
                                                <div class="form-group">
                                                    <label for="first-name-column">Kecamatan</label>
                                                    <select
                                                        class="choices form-select @error('regency_id') is-invalid @enderror"
                                                        id="regency_id" name="regency_id">
                                                        <option selected>Kecamatan</option>
                                                        @foreach ($regencies as $regency)
                                                        @if (old('regency_id', $regency->id) == $user->regency_id)
                                                        <option selected value="{{ $regency->id }}">{{ $regency->name }}</option>
                                                    @else
                                                        <option value="{{ $regency->id }}">{{ $regency->name }}</option>
                                                    @endif
                                                        @endforeach
                                                    </select>
                                                    @error('regency_id')
                                                        <div class="text-danger">
                                                            {{ $message }}
                                                        </div>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-12">
                                                <div class="form-group">
                                                    <label for="first-name-column">Kelurahan</label>
                                                    <select
                                                        class="choices form-select @error('district_id') is-invalid @enderror"
                                                        id="district_id" name="district_id">
                                                        <option selected>Kelurahan</option>
                                                        @foreach ($districts as $district)
                                                        @if (old('district_id', $district->id) == $user->district_id)
                                                        <option selected value="{{ $district->id }}">{{ $district->name }}</option>
                                                    @else
                                                        <option value="{{ $district->id }}">{{ $district->name }}</option>
                                                    @endif
                                                        @endforeach
                                                    </select>
                                                    @error('district_id')
                                                        <div class="text-danger">
                                                            {{ $message }}
                                                        </div>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-12">
                                                <div class="form-group">
                                                    <label for="first-name-column">Alamat</label>
                                                    <input type="text"
                                                        class="form-control
                                                        @error('address') is-invalid @enderror"
                                                        id="address" name="address"
                                                        value="{{ old('address', $user->address) }}">
                                                    @error('address')
                                                        <div class="text-danger">
                                                            {{ $message }}
                                                        </div>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-12">
                                                <div class="form-group">
                                                    <label for="first-name-column">Kode Pos</label>
                                                    <input type="text"
                                                        class="form-control
                                                        @error('zip_code') is-invalid @enderror"
                                                        id="zip_code" name="zip_code"
                                                        value="{{ old('zip_code', $user->zip_code) }}">
                                                    @error('zip_code')
                                                        <div class="text-danger">
                                                            {{ $message }}
                                                        </div>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-12">
                                                <div class="form-group">
                                                    <label for="first-name-column">Nomor Telepon</label>
                                                    <input type="text"
                                                        class="form-control
                                                        @error('phone') is-invalid @enderror"
                                                        id="phone" name="phone"
                                                        value="{{ old('phone', $user->phone) }}">
                                                    @error('phone')
                                                        <div class="text-danger">
                                                            {{ $message }}
                                                        </div>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-12">
                                                <div class="form-group">
                                                    <label for="first-name-column">Nama Bank</label>
                                                    <input type="text"
                                                        class="form-control
                                                        @error('bank_name') is-invalid @enderror"
                                                        id="bank_name" name="bank_name"
                                                        value="{{ old('bank_name', $user->bank_name) }}">
                                                    @error('bank_name')
                                                        <div class="text-danger">
                                                            {{ $message }}
                                                        </div>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-12">
                                                <div class="form-group">
                                                    <label for="first-name-column">Nomor Rekening</label>
                                                    <input type="text"
                                                        class="form-control
                                                        @error('bank_account') is-invalid @enderror"
                                                        id="bank_account" name="bank_account" placeholder="Nomor rekening..."
                                                        value="{{ old('bank_account', $user->bank_account) }}">
                                                    @error('bank_account')
                                                        <div class="text-danger">
                                                            {{ $message }}
                                                        </div>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-12">
                                                <div class="form-group">
                                                    <label for="first-name-column">Ubah Foto</label>
                                                    <input type="hidden" name="oldImage" value="{{ $user->photo }}">
                                                    @if ($user->photo)
                                                        <img src="{{ asset('storage/' . $user->photo) }}"
                                                            class="img-preview mb-3 img-fluid col-sm-5 d-block">
                                                    @else
                                                        <img class="img-preview img-fluid mb-3 col-sm-5">
                                                    @endif
                                                    <input class="form-control" type="file" id="photo" name="photo" onchange="previewImage()">
                                                    @error('photo')
                                                        <div class="text-danger">
                                                            {{ $message }}
                                                        </div>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-12 d-flex justify-content-end">
                                                <button type="submit" class="btn btn-primary me-1 mb-1">
                                                    Submit
                                                </button>
                                                <button type="reset" class="btn btn-light-secondary me-1 mb-1">
                                                    Reset
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                    @if ($user->verified == 1)
                                    <span class="badge bg-success">Verified</span>
                                    @else
                                    <span class="badge bg-danger">Not Verified</span>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        @endsection
