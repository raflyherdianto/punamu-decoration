@extends('home.layouts.main')

@section('content')
    <div class="hero page-inner overlay" style="background-image: url('images/hero_bg_1.jpg')">
        <div class="container">
            <div class="row justify-content-center align-items-center">
                <div class="col-lg-9 text-center mt-5">
                    <h1 class="heading" data-aos="fade-up">Details Service</h1>

                    <nav aria-label="breadcrumb" data-aos="fade-up" data-aos-delay="200">
                        <ol class="breadcrumb text-center justify-content-center">
                            <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                            <li class="breadcrumb-item active text-white-50" aria-current="page">
                                Details Service
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>

    <div class="section">
        <div class="container">
            <div class="property-item">
                <a href="{{ asset('storage/' . $details->image) }}" class="img" data-toggle="lightbox">
                    <img src="{{ asset('storage/' . $details->image) }}" alt="Image" class="img-fluid" height="500px" />
                </a>

                <div class="property-content">
                    <div class="rating">
                        <div class="price"><span>Rp. {{ number_format($details->price, 0, ',', '.') }}</span></div>
                        <h6><img src="{{ asset('images/Icon/star.png') }}" style="width: 16px" alt=""> Rating :
                            {{ $details->rating }}</h6>
                    </div>
                    <p class="review"></p>
                    <div>
                        <span class="d-block mb-2 text-black-50">{{ $details->description }}</span>
                        <span class="city d-block mb-2">{{ $details->name }}</span>
                        <a href="{{ url('https://api.whatsapp.com/send?phone=628803212754&text=Halo%20min,%20mau%20tanya%20' . $details->name) }}"
                            class="btn btn-primary py-2 px-3">Contact us</a>
                    </div>
                </div>
            </div>
            <!-- .item -->
        </div>
    </div>

    <div class="section section-properties">
        <div class="container">
            <div class="row mb-5 align-items-center">
                <div class="col-lg-6 text-center mx-auto">
                    <h2 class="font-weight-bold text-primary heading">
                        Reviews
                    </h2>
                </div>
            </div>
            <div class="row">
                @empty($reviews)
                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
                        <div class="property-item mb-30">
                            <div class="property-content">
                                <div>
                                    <span class="d-block mb-2 text-black-50">No Reviews</span>
                                </div>
                            </div>
                        </div>
                    </div>
                @endempty
                @foreach ($reviews as $review)
                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
                        <div class="property-item mb-30">
                            @if ($review->photo == null)
                                @if ($review->gender == 'L')
                                    <a href="{{ asset('/compiled/jpg/2.jpg') }}" data-toggle="lightbox">
                                        <img width="80" src="{{ asset('/compiled/jpg/2.jpg') }}">
                                    </a>
                                @else
                                    <a href="{{ asset('/compiled/jpg/3.jpg') }}" data-toggle="lightbox">
                                        <img width="80" src="{{ asset('/compiled/jpg/3.jpg') }}">
                                @endif
                            @else
                                <a href="{{ asset('storage/' . $review->photo) }}" class="img" data-toggle="lightbox">
                                    <img src="{{ asset('storage/' . $review->photo) }}" alt="Image" class="img-fluid" />
                                </a>
                            @endif

                            <div class="property-content">
                                <div class="rating">
                                    <div class="price"><span></span></div>
                                    <h6><img src="{{ asset('images/Icon/star.png') }}" style="width: 16px" alt="">
                                        Rating : {{ $review->star }}</h6>
                                </div>
                                <div>
                                    <span class="city d-block mb-2">{{ $review->name }}</span>
                                </div>
                                <p class="review"></p>
                                <div>
                                    <span class="d-block mb-2 text-black-50">"{{ $review->description }}"</span>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
