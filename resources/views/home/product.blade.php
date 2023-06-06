@extends('home.layouts.main')

@section('content')
    <div class="hero page-inner overlay" style="background-image: url('images/hero_bg_1.jpg')">
        <div class="container">
            <div class="row justify-content-center align-items-center">
                <div class="col-lg-9 text-center mt-5">
                    <h1 class="heading" data-aos="fade-up">Our Services</h1>

                    <nav aria-label="breadcrumb" data-aos="fade-up" data-aos-delay="200">
                        <ol class="breadcrumb text-center justify-content-center">
                            <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                            <li class="breadcrumb-item active text-white-50" aria-current="page">
                                Services
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>

    <div class="section">
        <div class="container">
            <div class="row mb-5 align-items-center">
                <div class="col-lg-6 text-center mx-auto">
                    <h2 class="font-weight-bold text-primary heading">
                        Featured Make Up
                    </h2>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="property-slider-wrap">
                        <div class="property-slider">
                            @foreach ($makeups as $makeup)
                            <div class="property-item">

                                <a href="{{ asset('storage/' . $makeup->image) }}" class="img" data-toggle="lightbox">
                                    <img src="{{ asset('storage/' . $makeup->image) }}" alt="Image" class="img-fluid" height="500px"/>
                                </a>

                                <div class="property-content">
                                    <div class="rating">
                                        <div class="price"><span>Rp. {{ number_format($makeup->price, 0, ',', '.') }}</span></div>
                                        <h6><img src="{{ asset('images/Icon/star.png') }}" style="width: 16px" alt=""> Rating : {{ $makeup->rating }}</h6>
                                    </div>
                                    <p class="review"></p>
                                    <div>
                                        <span class="d-block mb-2 text-black-50">{{ $makeup->description }}</span>
                                        <span class="city d-block mb-2">{{ $makeup->name }}</span>
                                        <a href="{{ url('https://api.whatsapp.com/send?phone=628803212754&text=Halo%20min,%20mau%20tanya%20'.$makeup->name) }}" class="btn btn-primary py-2 px-3">Contact us</a>
                                        <a href="{{ url('service/details/'.$makeup->id) }}" class="btn btn-primary py-2 px-3">Details</a>
                                    </div>
                                </div>

                            </div>
                            <!-- .item -->
                            @endforeach
                        </div>

                        <div id="property-nav" class="controls" tabindex="0" aria-label="Carousel Navigation">
                            <span class="prev" data-controls="prev" aria-controls="property"
                                tabindex="-1">Prev</span>
                            <span class="next" data-controls="next" aria-controls="property"
                                tabindex="-1">Next</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="section section-properties">
        <div class="container">
            <div class="row">
                @foreach ($decorations as $decoration)
                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
                    <div class="property-item mb-30">

                        <a href="{{ asset('storage/' . $decoration->image) }}" class="img" data-toggle="lightbox">
                            <img src="{{ asset('storage/' . $decoration->image) }}" alt="Image" class="img-fluid" />
                        </a>

                        <div class="property-content">
                            <div class="rating">
                                <div class="price"><span>Rp. {{ number_format($decoration->price, 0, ',', '.') }}</span></div>
                                <h6><img src="{{ asset('images/Icon/star.png') }}" style="width: 16px" alt=""> Rating : {{ $decoration->rating }}</h6>
                            </div>
                            <p class="review"></p>
                            <div>
                                <span class="d-block mb-2 text-black-50">{{ $decoration->description }}</span>
                                <span class="city d-block mb-2">{{ $decoration->name }}</span>
                                <a href="{{ url('https://api.whatsapp.com/send?phone=628803212754&text=Halo%20min,%20mau%20tanya%20'.$decoration->name) }}" class="btn btn-primary py-2 px-3">Contact us</a>
                                <a href="{{ url('service/details/'.$decoration->id) }}" class="btn btn-primary py-2 px-3">Details</a>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
