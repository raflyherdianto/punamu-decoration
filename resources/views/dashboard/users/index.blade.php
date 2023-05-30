@extends('dashboard.layouts.main')

@section('container')
    <div class="page-heading">
        <div class="page-title">
            <div class="row">
                <div class="col-12 col-md-6 order-md-1 order-last mb-2">
                    <h3>Customers</h3>
                </div>
                <div class="col-12 col-md-6 order-md-2 order-first">
                    <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="{{ url('dashboard') }}">Dashboard</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">
                                Customers
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>

        <section class="section">
            <div class="card">
                <a href="{{ url('dashboard/customer/create') }}">
                    <h5 class="col-12 col-md-2 btn btn-primary" style="margin: 15px 15px 0px 15px">Create Data</h5>
                </a>
                <div class="card-body">
                    <table class="table table-striped" id="table1">
                        <thead>
                            <tr>
                                <th>Nama</th>
                                <th>Email</th>
                                <th>Jenis Kelamin</th>
                                <th>Provinsi</th>
                                <th>Kecamatan</th>
                                <th>Kelurahan</th>
                                <th>Alamat</th>
                                <th>Telepon</th>
                                <th>Bank</th>
                                <th>No Rekening</th>
                                <th>Foto</th>
                                <th>Verified</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($customers as $customer)
                            <tr>
                                <td>{{ $customer->name }}</td>
                                <td>{{ $customer->email }}</td>
                                <td>{{ $customer->gender }}</td>
                                <td>{{ $customer->province->name }}</td>
                                <td>{{ $customer->regency->name }}</td>
                                <td>{{ $customer->district->name }}</td>
                                <td>{{ $customer->address }}</td>
                                <td>{{ $customer->phone }}</td>
                                <td>{{ $customer->bank_name }}</td>
                                <td>{{ $customer->bank_account }}</td>
                                <td>
                                    <a href="{{ asset('storage/' . $customer->photo) }}" data-toggle="lightbox">
                                        <img width="50" src="{{ asset('storage/' . $customer->photo) }}">
                                    </a>
                                <td>
                                    @if ($customer->verified == 1)
                                        <span class="badge bg-success">Verified</span>
                                    @else
                                        <span class="badge bg-danger">Not Verified</span>
                                    @endif
                                <td>
                                    <form action="{{ url('dashboard/customer/'.$customer->id) }}" method="POST">
                                        @method('delete')
                                        @csrf
                                        <button type="submit">
                                            <box-icon name='message-square-x'></box-icon>
                                        </button>
                                        {{-- <button type="submit" class="btn btn-danger btn-sm">Hapus</button> --}}
                                    </form>
                                    <span>
                                        <button>
                                            <a href="{{ url('dashboard/customer/'.$customer->id.'/edit') }}">
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
