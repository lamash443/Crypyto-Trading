<x-guest-layout>
  <!-- ================> Page header start here <================== -->
  <section class="page-header bg--cover" style="background-image:url({{ asset('assets/images/header/1.png') }})">
    <div class="container">
      <div class="page-header__content" data-aos="fade-right" data-aos-duration="1000">
        <h2>Forgot Password</h2>
        <nav style="--bs-breadcrumb-divider: '/';" aria-label="breadcrumb">
          <ol class="breadcrumb mb-0">
            <li class="breadcrumb-item "><a href="/">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Forgot Password</li>
          </ol>
        </nav>
      </div>
      <div class="page-header__shape">
        <span class="page-header__shape-item page-header__shape-item--1"><img src="{{ asset('assets/images/header/2.png') }}"
            alt="shape-icon"></span>
      </div>
    </div>
  </section>
  <!-- ================> Page header end here <================== -->

  <!-- ===============>> account start here <<================= -->
  <section class="account padding-top padding-bottom sec-bg-color2">
    <div class="container">
      <div class="account__wrapper" data-aos="fade-up" data-aos-duration="800">
        <div class="row g-4">
          <div class="col-lg-12">
            <div class="account__content account__content--style1">

              <!-- account tittle -->
              <div class="account__header">
                <h2>Reset Your Password</h2>
                <p>Hey there! Forgot your password? No worries, just enter your email and follow the steps to
                  recover it. Easy peasy lemon squeezy!</p>
              </div>

              <!-- Session Status -->
              <x-auth-session-status class="mb-4 text-success" :status="session('status')" />

              <!-- account form -->
              <form method="POST" action="{{ route('password.email') }}" class="account__form">
                @csrf
                <div class="row g-4">
                  <div class="col-12">
                    <div>
                      <label for="email" class="form-label">Email</label>
                      <input type="email" class="form-control" name="email" id="email" placeholder="Enter your email" value="{{ old('email') }}" required autofocus>
                      <x-input-error :messages="$errors->get('email')" class="mt-2 text-danger" />
                    </div>
                  </div>
                </div>

                <button type="submit" class="trk-btn trk-btn--border trk-btn--primary d-block mt-4">Email Password Reset Link</button>
              </form>

              <div class="account__switch">
                <p> <a href="{{ route('login') }}" class="style2"><i class="fa-solid fa-arrow-left-long"></i> Back to <span>Login</span></a></p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="account__shape">
      <span class="account__shape-item account__shape-item--1"><img src="{{ asset('assets/images/contact/4.png') }}"
          alt="shape-icon"></span>
    </div>
  </section>
  <!-- ===============>> account end here <<================= -->
</x-guest-layout>
