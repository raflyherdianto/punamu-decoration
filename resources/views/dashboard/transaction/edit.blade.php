@extends('dashboard.layouts.main')

@section('container')
    <div class="page-heading">
        <div class="page-title">
            <div class="row">
                <div class="col-12 col-md-6 order-md-1 order-last mb-2">
                    <h3>Edit Transaction</h3>
                </div>
                <div class="col-12 col-md-6 order-md-2 order-first">
                    <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="{{ url('dashboard') }}">Dashboard</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">
                                Edit Transaction
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
                                    <form action="{{ url('dashboard/transaction/'.$transaction->id) }}" method="POST" class="form" enctype="multipart/form-data">
                                        @method('PUT')
                                        @csrf
                                        <div class="row">
                                            <div class="col-md-6 col-12">
                                                <div class="form-group">
                                                    <label for="first-name-column">Status</label>
                                                    <select
                                                        class="choices form-select @error('status') is-invalid @enderror"
                                                        id="status" name="status">
                                                        <option selected>Status...</option>
                                                        @if (old('status', $transaction->status) == "PENDING")
                                                         <option value="PENDING" selected>PENDING</option>
                                                        <option value="SUCCESS">SUCCESS</option>
                                                        <option value="CANCELED">CANCELED</option>
                                                        <option value="ON PROGRESS">ON PROGRESS</option>
                                                        @elseif (old('status', $transaction->status) == "SUCCESS")
                                                        <option value="PENDING">PENDING</option>
                                                        <option value="SUCCESS" selected>SUCCESS</option>
                                                        <option value="CANCELED">CANCELED</option>
                                                        <option value="ON PROGRESS">ON PROGRESS</option>
                                                        @elseif (old('status', $transaction->status) == "CANCELED")
                                                        <option value="PENDING">PENDING</option>
                                                        <option value="SUCCESS">SUCCESS</option>
                                                        <option value="CANCELED" selected>CANCELED</option>
                                                        <option value="ON PROGRESS">ON PROGRESS</option>
                                                        @elseif (old('status', $transaction->status) == "ON PROGRESS")
                                                        <option value="PENDING">PENDING</option>
                                                        <option value="SUCCESS">SUCCESS</option>
                                                        <option value="CANCELED">CANCELED</option>
                                                        <option value="ON PROGRESS" selected>ON PROGRESS</option>
                                                        @endif
                                                    </select>
                                                    @error('status')
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
