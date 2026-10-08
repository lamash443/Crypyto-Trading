<x-guest-layout>
  <!-- ================> Page header start here <================== -->
  <section class="page-header bg--cover" style="background-image:url({{ asset('assets/images/header/1.png') }})">
    <div class="container">
      <div class="page-header__content" data-aos="fade-right" data-aos-duration="1000">
        <h2>Login</h2>
        <nav style="--bs-breadcrumb-divider: '/';" aria-label="breadcrumb">
          <ol class="breadcrumb mb-0">
            <li class="breadcrumb-item "><a href="/">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Login</li>
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
                <h2>Welcome back!</h2>
                <p>Hey there! Ready to log in? Just enter your email and password below and you'll be back in action
                  in no time. Let's go!</p>
              </div>

              <!-- account social -->
              <div class="account__social">
                <a href="#" class="account__social-btn"><span><img src="{{ asset('assets/images/others/google.svg') }}"
                      alt="google icon"></span>
                  Continue with google
                </a>
              </div>

              <!-- account divider -->
              <div class="account__divider account__divider--style1">
                <span>or</span>
              </div>

              <!-- Session Status -->
              <x-auth-session-status class="mb-4 text-success" :status="session('status')" />

              <!-- account form -->
              <form method="POST" action="{{ route('login') }}" class="account__form">
                @csrf
                <div class="row g-4">
                  <div class="col-12">
                    <div>
                      <label for="email" class="form-label">Email</label>
                      <input type="email" class="form-control" name="email" id="email" placeholder="Enter your email"
                        value="{{ old('email') }}" required autofocus autocomplete="username">
                      <x-input-error :messages="$errors->get('email')" class="mt-2 text-danger" />
                    </div>
                  </div>
                  <div class="col-12">
                    <div class="form-pass">
                      <label for="password" class="form-label">Password</label>
                      <input type="password" class="form-control showhide-pass" name="password" id="password" placeholder="Password"
                        required autocomplete="current-password">
                      <button type="button" id="btnToggle" class="form-pass__toggle"><i id="eyeIcon"
                          class="fa fa-eye"></i></button>
                      <x-input-error :messages="$errors->get('password')" class="mt-2 text-danger" />
                    </div>
                  </div>
                </div>

                <div class="account__check">
                  <div class="account__check-remember">
                    <input type="checkbox" class="form-check-input" name="remember" id="remember_me">
                    <label for="remember_me" class="form-check-label">
                      Remember me
                    </label>
                  </div>
                  <div class="account__check-forgot">
                    @if (Route::has('password.request'))
                      <a href="{{ route('password.request') }}">Forgot Password?</a>
                    @endif
                  </div>
                </div>

                <button type="submit" class="trk-btn trk-btn--border trk-btn--primary d-block mt-4">Sign in</button>
              </form>

              <div class="account__switch">
                <p>Don't have an account? <a href="{{ route('register') }}">Sign up</a></p>
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
