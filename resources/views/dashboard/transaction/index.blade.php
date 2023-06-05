@extends('dashboard.layouts.main')

@section('container')
    <div class="page-heading">
        <div class="page-title">
            <div class="row">
                <div class="col-12 col-md-6 order-md-1 order-last mb-2">
                    <h3>Transactions</h3>
                </div>
                <div class="col-12 col-md-6 order-md-2 order-first">
                    <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="{{ url('dashboard') }}">Dashboard</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">
                                Transactions
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>

        <section class="section">
            <div class="card">
                {{-- <a href="{{ url('dashboard/transaction/create') }}">
                    <h5 class="col-12 col-md-2 btn btn-primary" style="margin: 15px 15px 0px 15px">Create Data</h5>
                </a> --}}
                <div class="card-body">
                    <table class="table table-striped" id="table1">
                        <thead>
                            <tr>
                                <th>Kode</th>
                                <th>Nama Pemesan</th>
                                <th>Total Harga</th>
                                <th>Tanggal Acara</th>
                                <th>Waktu Acara</th>
                                <th>Tanggal Transaksi</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($transactions as $transaction)
                            <tr>
                                <td>{{ $transaction->code }}</td>
                                <td>{{ $transaction->user->name }}</td>
                                <td>Rp.{{ $transaction->total_price }}</td>
                                <td>{{ $transaction->date_event }}</td>
                                <td>{{ $transaction->time_event }}</td>
                                <td>{{ $transaction->created_at }}</td>
                                @if ($transaction->status == 'PENDING')
                                    <td>
                                        <span class="badge bg-warning text-dark">{{ $transaction->status }}</span>
                                    </td>
                                    @elseif ($transaction->status == 'SUCCESS')
                                    <td>
                                        <span class="badge bg-success">{{ $transaction->status }}</span>
                                    </td>
                                    @elseif ($transaction->status == 'CANCELED')
                                    <td>
                                        <span class="badge bg-danger">{{ $transaction->status }}</span>
                                    </td>
                                    @elseif ($transaction->status == 'ON PROGRESS')
                                    <td>
                                        <span class="badge bg-primary">{{ $transaction->status }}</span>
                                    </td>
                                @endif
                                <td>
                                    @can('admin')
                                    <form action="{{ url('dashboard/transaction/'.$transaction->id) }}" method="POST">
                                        @method('delete')
                                        @csrf
                                        <button type="submit">
                                            <box-icon name='message-square-x'></box-icon>
                                        </button>
                                        {{-- <button type="submit" class="btn btn-danger btn-sm">Hapus</button> --}}
                                    </form>
                                    <span>
                                        <button>
                                            <a href="{{ url('dashboard/transaction/'.$transaction->id.'/edit') }}">
                                                <box-icon name='edit'></box-icon>
                                            </a>
                                        </button>
                                    </span>
                                    @endcan
                                    <span>
                                        <button>
                                            <a href="{{ url('dashboard/transaction/'.$transaction->id) }}">
                                                <box-icon name='info-circle'></box-icon>
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
