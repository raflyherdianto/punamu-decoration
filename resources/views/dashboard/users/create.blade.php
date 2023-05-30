@extends('dashboard.layouts.main')

@section('container')
    <div class="page-heading">
        <div class="page-title">
            <div class="row">
                <div class="col-12 col-md-6 order-md-1 order-last mb-2">
                    <h3>Create Customer</h3>
                </div>
                <div class="col-12 col-md-6 order-md-2 order-first">
                    <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="{{ url('dashboard') }}">Dashboard</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">
                                Create Customer
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
                                    <form action="{{ url('dashboard/customer') }}" method="POST" class="form" enctype="multipart/form-data">
                                        @csrf
                                        <div class="row">
                                            <div class="col-md-6 col-12">
                                                <div class="form-group">
                                                    <label for="first-name-column">Nama Customer</label>
                                                    <input type="text"
                                                        class="form-control
                                                        @error('name') is-invalid @enderror"
                                                        id="name" name="name" placeholder="Nama Customer..."
                                                        value="{{ old('name') }}">
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
                                                        id="username" name="username" placeholder="Username..."
                                                        value="{{ old('username') }}">
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
                                                        id="password" name="password" placeholder="Password..."
                                                        value="{{ old('password') }}">
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
                                                        id="email" name="email" placeholder="Email..."
                                                        value="{{ old('email') }}">
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
                                                        id="gender" name="gender"
                                                        value="{{ old('gender') }}">
                                                        <option selected>Kategori</option>
                                                        <option value="L">Laki-laki</option>
                                                        <option value="P">Perempuan</option>
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
                                                        id="province_id" name="province_id"
                                                        value="{{ old('province_id') }}">
                                                        <option selected>Provinsi...</option>
                                                        @foreach ($provinces as $province)
                                                            <option value="{{ $province->id }}">{{ $province->name }}
                                                            </option>
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
                                                        id="regency_id" name="regency_id"
                                                        value="{{ old('regency_id') }}">
                                                        <option selected>Kecamatan...</option>
                                                        @foreach ($regencies as $regency)
                                                            <option value="{{ $regency->id }}">{{ $regency->name }}
                                                            </option>
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
                                                        id="district_id" name="district_id"
                                                        value="{{ old('district_id') }}">
                                                        <option selected>Kelurahan...</option>
                                                        @foreach ($districts as $district)
                                                            <option value="{{ $district->id }}">{{ $district->name }}
                                                            </option>
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
                                                        id="address" name="address" placeholder="Alamat..."
                                                        value="{{ old('address') }}">
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
                                                        id="zip_code" name="zip_code" placeholder="Kode pos..."
                                                        value="{{ old('zip_code') }}">
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
                                                        id="phone" name="phone" placeholder="Nomor telepon..."
                                                        value="{{ old('phone') }}">
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
                                                        id="bank_name" name="bank_name" placeholder="Nama bank..."
                                                        value="{{ old('bank_name') }}">
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
                                                        value="{{ old('bank_account') }}">
                                                    @error('bank_account')
                                                        <div class="text-danger">
                                                            {{ $message }}
                                                        </div>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-12">
                                                <div class="form-group">
                                                    <label for="first-name-column">Upload Foto</label>
                                                    <img class="img-preview img-fluid mb-3 col-sm-5">
                                                    <input class="form-control @error('photo') is-invalid @enderror" type="file" id="photo" name="photo" onchange="previewImage()">
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
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        @endsection
