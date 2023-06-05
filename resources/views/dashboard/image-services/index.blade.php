@extends('dashboard.layouts.main')

@section('container')
    <div class="page-heading">
        <div class="page-title">
            <div class="row">
                <div class="col-12 col-md-6 order-md-1 order-last mb-2">
                    <h3>Image Services</h3>
                </div>
                <div class="col-12 col-md-6 order-md-2 order-first">
                    <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="{{ url('dashboard') }}">Dashboard</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">
                                Image Services
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>

        <section class="section">
            <div class="card">
                <a href="{{ url('dashboard/image-service/create') }}">
                    <h5 class="col-12 col-md-2 btn btn-primary" style="margin: 15px 15px 0px 15px">Create Data</h5>
                </a>
                <div class="card-body">
                    <table class="table table-striped" id="table1">
                        <thead>
                            <tr>
                                <th>Service</th>
                                <th>Gambar</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($image_services as $image_service)
                            <tr>
                                <td>{{ $image_service->service->name }}</td>
                                <td>
                                    <a href="{{ asset('storage/' . $image_service->image) }}" data-toggle="lightbox">
                                        <img width="50" src="{{ asset('storage/' . $image_service->image) }}">
                                    </a>
                                <td>
                                    <form action="{{ url('dashboard/image-service/'.$image_service->id) }}" method="POST">
                                        @method('delete')
                                        @csrf
                                        <button type="submit">
                                            <box-icon name='message-square-x'></box-icon>
                                        </button>
                                        {{-- <button type="submit" class="btn btn-danger btn-sm">Hapus</button> --}}
                                    </form>
                                    <span>
                                        <button>
                                            <a href="{{ url('dashboard/image-service/'.$image_service->id.'/edit') }}">
                                                <box-icon name='edit'></box-icon>
                                            </a>
                                        </button>
                                    </span>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </section>
    </div>

@endsection
