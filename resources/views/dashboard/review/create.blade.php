@extends('dashboard.layouts.main')

@section('container')
    <div class="page-heading">
        <div class="page-title">
            <div class="row">
                <div class="col-12 col-md-6 order-md-1 order-last mb-2">
                    <h3>Create Review</h3>
                </div>
                <div class="col-12 col-md-6 order-md-2 order-first">
                    <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="{{ url('dashboard') }}">Dashboard</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">
                                Create Review
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
                                    <form action="{{ url('dashboard/review') }}" method="POST" class="form">
                                        @csrf
                                        <div class="row">
                                            <div class="col-md-6 col-12">
                                                <div class="form-group">
                                                    <label for="first-name-column">Nama Layanan</label>
                                                    <select
                                                        class="choices form-select @error('service_id') is-invalid @enderror"
                                                        id="service_id" name="service_id"
                                                        value="{{ old('service_id') }}">
                                                        <option selected>Layanan</option>
                                                        @foreach ($services as $service)
                                                            <option value="{{ $service->id }}">{{ $service->name }}
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                    @error('service_id')
                                                        <div class="text-danger">
                                                            {{ $message }}
                                                        </div>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-12">
                                                <div class="form-group">
                                                    <label for="first-name-column">Deskripsi</label>
                                                    <input type="text"
                                                        class="form-control
                                                        @error('description') is-invalid @enderror"
                                                        id="description" name="description"
                                                        placeholder="Deskripsi..." value="{{ old('description') }}">
                                                        @error('description')
                                                        <div class="text-danger">
                                                            {{ $message }}
                                                        </div>
                                                @enderror
                                                    </div>
                                            </div>
                                            <div class="col-md-6 col-12">
                                                <div class="form-group">
                                                    <label for="first-name-column">Rating</label>
                                                    <i class="bi bi-star-fill"></i>
                                                    <select class="form-select @error('star') is-invalid @enderror"
                                                    id="star" name="star" value="{{ old('star') }}">
                                                        <option selected>Bintang...</option>
                                                        <option value=5>5</option>
                                                        <option value=4>4</option>
                                                        <option value=3>3</option>
                                                        <option value=2>2</option>
                                                        <option value=1>1</option>
                                                    </select>
                                                    @error('star')
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
