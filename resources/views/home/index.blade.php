@extends('home.layouts.main')

@section('content')
    <div class="hero">
        <div class="hero-slide">
            <div class="img overlay" style="background-image: url('images/1.jpg')"></div>
            <div class="img overlay" style="background-image: url('images/Decor/decor\ \(14\).jpeg')"></div>
            <div class="img overlay" style="background-image: url('images/3.jpg')"></div>
        </div>

        <div class="container">
            <div class="row justify-content-center align-items-center">
                <div class="col-lg-9 text-center">
                    <h1 class="heading" data-aos="fade-up">

                    </h1>
                    <h1 class="heading" data-aos="fade-up">
                        Organizer of backdrop decorations for the best events in the city of Malang
                    </h1>
                </div>
            </div>
        </div>
    </div>

    <div class="section">
        <div class="container">
            <div class="row mb-5 align-items-center">
                <div class="col-lg-6">
                    <h2 class="font-weight-bold text-primary heading">
                        Popular Decoration
                    </h2>
                </div>
                <div class="col-lg-6 text-lg-end">
                    <p>
                        <a href="{{ url('services') }}" class="btn btn-primary text-white py-3 px-4">View all
                            decoration</a>
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="property-slider-wrap">
                        <div class="property-slider">
                            @foreach ($services as $service)
                            <div class="property-item">
                                <a href="{{ asset('storage/' . $service->image) }}" class="img" data-toggle="lightbox">
                                    <img src="{{ asset('storage/' . $service->image) }}" alt="Image" class="img-fluid" />
                                </a>

                                <div class="property-content">
                                    <div class="rating">
                                        <div class="price">
                                            <span>Rp.{{ number_format($service->price, 0, ',', '.') }}</span>
                                        </div>
                                        <h6><img src="{{ asset('images/Icon/star.png') }}" style="width: 16px" alt=""> Rating : {{ $service->rating }}</h6>
                                    </div>
                                    <p class="review"></p>
                                    <div>
                                        <span class="d-block mb-2 text-black-50">{{ $service->description }}</span>
                                        <span class="city d-block mb-2">{{ $service->name }}</span>
                                        <a href="{{ url('https://api.whatsapp.com/send?phone=628803212754&text=Halo%20min,%20mau%20tanya%20'.$service->name) }}" class="btn btn-primary py-2 px-3">Contact us</a>
                                        <a href="{{ url('service/details/'.$service->id) }}" class="btn btn-primary py-2 px-3">Details</a>
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

    <section class="features-1">
        <div class="container">
            <div class="row">
                <h2>Punamu Decoration</h2>
                <h5 class="mb-5">Backdrop Dekorasi Wilayah Malang Sekitar</h5>
                <div class="col-6 col-lg-3" data-aos="fade-up" data-aos-delay="300">
                    <div class="box-feature">
                        <img src="images/Icon/new.png" alt="" width="70px" class="mb-3">
                        <h3 class="mb-3">New House</h3>
                        <p>
                            Dapat melayani segala dekorasi yang dipersiapkan untuk merayakan rumah baru seperti pesta rumah,
                            undang tamu, syukuran, dan lainya.
                        </p>
                    </div>
                </div>
                <div class="col-6 col-lg-3" data-aos="fade-up" data-aos-delay="500">
                    <div class="box-feature">
                        <img src="images/Icon/wedding-couple.png" alt="" width="70px" class="mb-3">
                        <h3 class="mb-3">Wedding Event</h3>
                        <p>
                            Dapat melayani segala yang dipersiapkan untuk merayakan hari pernikahan seperti busana,
                            dekorasi, makeup dan fotografi.
                        </p>
                    </div>
                </div>
                <div class="col-6 col-lg-3" data-aos="fade-up" data-aos-delay="400">
                    <div class="box-feature">
                        <img src="images/Icon/wedding-day.png" alt="" width="70px" class="mb-3">
                        <h3 class="mb-3">Engagement Event</h3>
                        <p>
                            Dapat melayani segala yang dipersiapkan untuk merayakan hari pertunangan seperti makeup, busana
                            dan fotografi.
                        </p>
                    </div>
                </div>
                <div class="col-6 col-lg-3" data-aos="fade-up" data-aos-delay="600">
                    <div class="box-feature">
                        <img src="images/Icon/birthday-cake.png" alt="" width="70px" class="mb-3">
                        <h3 class="mb-3">Birthday Event</h3>
                        <p>
                            Dapat melayani segala dekorasi yang dipersiapkan untuk merayakan hari ulang tahun dan acara
                            sejenisnya.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="section sec-testimonials">
        <div class="container">
            <div class="row mb-5 align-items-center">
                <div class="col-md-6">
                    <h2 class="font-weight-bold heading text-primary mb-4 mb-md-0">
                        Customer Says
                    </h2>
                </div>
                <div class="col-md-6 text-md-end">
                    <div id="testimonial-nav">
                        <span class="prev" data-controls="prev">Prev</span>

                        <span class="next" data-controls="next">Next</span>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-4"></div>
            </div>
            <div class="testimonial-slider-wrap">
                <div class="testimonial-slider">
                    <div class="item">
                        <div class="testimonial">
                            <img src="images/person_1-min.jpg" alt="Image"
                                class="img-fluid rounded-circle w-25 mb-4" />
                            <div class="rate">
                                <span class="icon-star text-warning"></span>
                                <span class="icon-star text-warning"></span>
                                <span class="icon-star text-warning"></span>
                                <span class="icon-star text-warning"></span>
                                <span class="icon-star text-warning"></span>
                            </div>
                            <h3 class="h5 text-primary mb-4">James Smith</h3>
                            <blockquote>
                                <p>
                                    &ldquo;Toko ini sangat bagus dalam menyiapkan dekorasi, dekorasinya pun begitu menarik
                                    dan kekinian.&rdquo;
                                </p>
                            </blockquote>
                            <p class="text-black-50">Open House Event</p>
                        </div>
                    </div>

                    <div class="item">
                        <div class="testimonial">
                            <img src="images/person_2-min.jpg" alt="Image"
                                class="img-fluid rounded-circle w-25 mb-4" />
                            <div class="rate">
                                <span class="icon-star text-warning"></span>
                                <span class="icon-star text-warning"></span>
                                <span class="icon-star text-warning"></span>
                                <span class="icon-star text-warning"></span>
                                <span class="icon-star text-warning"></span>
                            </div>
                            <h3 class="h5 text-primary mb-4">Mike Houston</h3>
                            <blockquote>
                                <p>
                                    &ldquo;Toko ini sangat lengkap untuk mempersiapkan dekorasi segala acara. Saya sangat
                                    suka dan ingin memesan layanan kembali.&rdquo;
                                </p>
                            </blockquote>
                            <p class="text-black-50">Engagement Event </p>
                        </div>
                    </div>

                    <div class="item">
                        <div class="testimonial">
                            <img src="images/person_3-min.jpg" alt="Image"
                                class="img-fluid rounded-circle w-25 mb-4" />
                            <div class="rate">
                                <span class="icon-star text-warning"></span>
                                <span class="icon-star text-warning"></span>
                                <span class="icon-star text-warning"></span>
                                <span class="icon-star text-warning"></span>
                                <span class="icon-star text-warning"></span>
                            </div>
                            <h3 class="h5 text-primary mb-4">Cameron Webster</h3>
                            <blockquote>
                                <p>
                                    &ldquo;Saya sangat suka memesan layanan disini sangat praktis, cepat, tanggap, maupun
                                    harga yang ditawarkan sangat murah..&rdquo;
                                </p>
                            </blockquote>
                            <p class="text-black-50">Birthday Event</p>
                        </div>
                    </div>

                    <div class="item">
                        <div class="testimonial">
                            <img src="images/person_4-min.jpg" alt="Image"
                                class="img-fluid rounded-circle w-25 mb-4" />
                            <div class="rate">
                                <span class="icon-star text-warning"></span>
                                <span class="icon-star text-warning"></span>
                                <span class="icon-star text-warning"></span>
                                <span class="icon-star text-warning"></span>
                                <span class="icon-star text-warning"></span>
                            </div>
                            <h3 class="h5 text-primary mb-4">Dave Smith</h3>
                            <blockquote>
                                <p>
                                    &ldquo;Toko ini menyediakan berbagai dekorasi yang diinginkan dan dapat membuat
                                    permintaan sendiri untuk dekor tempat sangat menarik.&rdquo;
                                </p>
                            </blockquote>
                            <p class="text-black-50">Wedding Event</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="section section-4 bg-light">
        <div class="container">
            <div class="row justify-content-center text-center mb-5">
                <div class="col-lg-5">
                    <h2 class="font-weight-bold heading text-primary mb-4">
                        Punamu Decoration
                    </h2>
                    <p class="text-black-50">
                        Menyediakan segala dekorasi dalam berbagai acara mulai dari wedding event, engagement event, new
                        house, birthday event, dan lainya.
                    </p>
                </div>
            </div>
            <div class="row justify-content-between mb-5">
                <div class="col-lg-7 mb-5 mb-lg-0 order-lg-2">
                    <div class="img-about dots">
                        <img src="images/Decor/decor (14).jpeg" alt="Image" class="img-fluid" />
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="d-flex feature-h">
                        <span class="wrap-icon me-3">
                            <img src="images/Icon/bill.png" alt="" width="60px" class="m-2">
                        </span>
                        <div class="feature-text">
                            <h3 class="heading">Bisa DP 50% Pembayaran</h3>
                            <p class="text-black-50">
                                Pembayaran biaya tagihan dapat dibayarkan 50% terlebih dahulu sebagai Uang DP
                            </p>
                        </div>
                    </div>

                    <div class="d-flex feature-h">
                        <span class="wrap-icon me-3">
                            <img src="images/Icon/chat.png" alt="" width="60px" class="m-2">
                        </span>
                        <div class="feature-text">
                            <h3 class="heading">Dapat Request Dekorasi</h3>
                            <p class="text-black-50">
                                Costumer dapat request bdekorasi sesuai dengan pilihan terbaiknya
                            </p>
                        </div>
                    </div>

                    <div class="d-flex feature-h">
                        <span class="wrap-icon me-3">
                            <img src="images/Icon/shopping-bag.png" alt="" width="60px" class="m-2">
                        </span>
                        <div class="feature-text">
                            <h3 class="heading">Paket Lengkap Harga Promo</h3>
                            <p class="text-black-50">
                                Jika memesan dengan paket lengkap maka tersedia harga promo yang lebih terjangkau
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row section-counter mt-5">
            </div>
        </div>
    </div>
@endsection
