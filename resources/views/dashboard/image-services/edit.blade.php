@extends('dashboard.layouts.main')

@section('container')
    <div class="page-heading">
        <div class="page-title">
            <div class="row">
                <div class="col-12 col-md-6 order-md-1 order-last mb-2">
                    <h3>Edit Image Service</h3>
                </div>
                <div class="col-12 col-md-6 order-md-2 order-first">
                    <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="{{ url('dashboard') }}">Dashboard</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">
                                Edit Image Service
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
                                    <form action="{{ url('dashboard/image-service/'.$image_service->id) }}" method="POST" class="form" enctype="multipart/form-data">
                                        @method('PUT')
                                        @csrf
                                        <div class="row">
                                            <div class="col-md-6 col-12">
                                                <div class="form-group">
                                                    <label for="first-name-column">Nama Layanan</label>
                                                    <select
                                                        class="choices form-select @error('service_id') is-invalid @enderror"
                                                        id="service_id" name="service_id">
                                                        <option selected>Nama layanan...</option>
                                                        @foreach ($services as $service)
                                                        @if (old('service_id', $service->id) == $image_service->service_id)
                                                        <option selected value="{{ $service->id }}">{{ $service->name }}</option>
                                                    @else
                                                        <option value="{{ $service->id }}">{{ $service->name }}</option>
                                                    @endif
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
                                                    <label for="first-name-column">Ubah Gambar</label>
                                                    <input type="hidden" name="oldImage" value="{{ $image_service->image }}">
                                                    @if ($image_service->image)
                                                        <img src="{{ asset('storage/' . $image_service->image) }}"
                                                            class="img-preview mb-3 img-fluid col-sm-5 d-block">
                                                    @else
                                                        <img class="img-preview img-fluid mb-3 col-sm-5">
                                                    @endif
                                                    <input class="form-control" type="file" id="image" name="image" onchange="previewImages()">
                                                    @error('image')
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
