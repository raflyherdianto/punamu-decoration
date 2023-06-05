@extends('dashboard.layouts.main')

@section('container')
    <div class="page-heading">
        <div class="page-title">
            <div class="row">
                <div class="col-12 col-md-6 order-md-1 order-last mb-2">
                    <h3>Cart</h3>
                </div>
                <div class="col-12 col-md-6 order-md-2 order-first">
                    <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="{{ url('dashboard') }}">Dashboard</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">
                                Cart
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>

        <section class="section">
            <div class="card">
                <a href="{{ url('dashboard/cart/create') }}">
                    <h5 class="col-12 col-md-2 btn btn-primary" style="margin: 15px 15px 0px 15px">Create Data</h5>
                </a>
                @if (count($carts) > 0)
                <a href="{{ url('dashboard/date') }}">
                    <h5 class="col-12 col-md-2 btn btn-success" style="margin: 15px 15px 0px 15px">Lanjutkan Pembayaran</h5>
                </a>
                @endif

                <div class="card-body">
                    <table class="table table-striped" id="table1">
                        <thead>
                            <tr>
                                <th>Nama Layanan</th>
                                <th>Jumlah</th>
                                <th>Harga</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($carts as $cart)
                            <tr>
                                <td>{{ $cart->service->name }}</td>
                                <td>{{ $cart->quantity }}</td>
                                <td>Rp.{{ $cart->total_price }}</td>
                                <td>
                                    <form action="{{ url('dashboard/cart/'.$cart->id) }}" method="POST">
                                        @method('delete')
                                        @csrf
                                        <button type="submit">
                                            <box-icon name='message-square-x'></box-icon>
                                        </button>
                                        {{-- <button type="submit" class="btn btn-danger btn-sm">Hapus</button> --}}
                                    </form>
                                    <span>
                                        <button>
                                            <a href="{{ url('dashboard/cart/'.$cart->id.'/edit') }}">
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
