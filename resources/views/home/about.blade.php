@extends('home.layouts.main')

@section('content')
<div class="hero page-inner overlay" style="background-image: url('images/hero_bg_3.jpg')">
    <div class="container">
        <div class="row justify-content-center align-items-center">
            <div class="col-lg-9 text-center mt-5">
                <h1 class="heading" data-aos="fade-up">About</h1>

                <nav aria-label="breadcrumb" data-aos="fade-up" data-aos-delay="200">
                    <ol class="breadcrumb text-center justify-content-center">
                        <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                        <li class="breadcrumb-item active text-white-50" aria-current="page">
                            About
                        </li>
                    </ol>
                </nav>
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
              <img src="{{ asset('images/Icon/new.png') }}" alt="" width="70px" class="mb-3">
              <h3 class="mb-3">New House</h3>
              <p>
                Dapat melayani segala dekorasi yang dipersiapkan untuk merayakan rumah baru seperti pesta rumah, undang tamu, syukuran, dan lainya.
              </p>
            </div>
          </div>
          <div class="col-6 col-lg-3" data-aos="fade-up" data-aos-delay="500">
            <div class="box-feature">
              <img src="{{ asset('images/Icon/wedding-couple.png') }}" alt="" width="70px" class="mb-3">
              <h3 class="mb-3">Wedding Event</h3>
              <p>
                Dapat melayani segala yang dipersiapkan untuk merayakan hari pernikahan seperti busana, dekorasi, makeup dan fotografi.
              </p>
            </div>
          </div>
          <div class="col-6 col-lg-3" data-aos="fade-up" data-aos-delay="400">
            <div class="box-feature">
              <img src="{{ asset('images/Icon/wedding-day.png') }}" alt="" width="70px" class="mb-3">
              <h3 class="mb-3">Engagement Event</h3>
              <p>
                Dapat melayani segala yang dipersiapkan untuk merayakan hari pertunangan seperti makeup, busana dan fotografi.
              </p>
            </div>
          </div>
          <div class="col-6 col-lg-3" data-aos="fade-up" data-aos-delay="600">
            <div class="box-feature">
              <img src="{{ asset('images/Icon/birthday-cake.png') }}" alt="" width="70px" class="mb-3">
              <h3 class="mb-3">Birthday Event</h3>
              <p>
                Dapat melayani segala dekorasi yang dipersiapkan untuk merayakan hari ulang tahun dan acara sejenisnya.
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <div class="section section-4 bg-light">
      <div class="container">
        <div class="row justify-content-center text-center mb-5">
          <div class="col-lg-5">
            <h2 class="font-weight-bold heading text-primary mb-4">
              Punamu Decoration
            </h2>
            <p class="text-black-50">
              Menyediakan segala dekorasi dalam berbagai acara mulai dari wedding event, engagement event, new house, birthday event, dan lainya.
            </p>
          </div>
        </div>
        <div class="row justify-content-between mb-5">
          <div class="col-lg-7 mb-5 mb-lg-0 order-lg-2">
            <div class="img-about dots">
              <img src="{{ asset('images/Decor/decor (14).jpeg') }}" alt="Image" class="img-fluid" />
            </div>
          </div>
          <div class="col-lg-4">
            <div class="d-flex feature-h">
              <span class="wrap-icon me-3">
                <img src="{{ asset('images/Icon/bill.png') }}" alt="" width="60px" class="m-2">
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
                 <img src="{{ asset('images/Icon/chat.png') }}" alt="" width="60px" class="m-2">
              </span>
              <div class="feature-text">
                <h3 class="heading">Dapat Request Dekorasi</h3>
                <p class="text-black-50">
                  Costumer dapat request dekorasi sesuai dengan pilihan terbaiknya
                </p>
              </div>
            </div>

            <div class="d-flex feature-h">
              <span class="wrap-icon me-3">
                  <img src="{{ asset('images/Icon/shopping-bag.png') }}" alt="" width="60px" class="m-2">
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
