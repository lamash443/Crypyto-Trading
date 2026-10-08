<x-guest-layout>
  <!-- ================> Page header start here <================== -->
  <section class="page-header bg--cover" style="background-image:url({{ asset('assets/images/header/1.png') }})">
    <div class="container">
      <div class="page-header__content" data-aos="fade-right" data-aos-duration="1000">
        <h2>Register</h2>
        <nav style="--bs-breadcrumb-divider: '/';" aria-label="breadcrumb">
          <ol class="breadcrumb mb-0">
            <li class="breadcrumb-item "><a href="/">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Register</li>
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
          <div class="col-12">
            <div class="account__content account__content--style1">

              <!-- account tittle -->
              <div class="account__header">
                <h2>Create Your Account</h2>
                <p>Hey there! Ready to join the party? We just need a few details from you to get started. Let's do
                  this!</p>
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

              <!-- account form -->
              <form method="POST" action="{{ route('register') }}" class="account__form">
                @csrf
                <div class="row g-4">
                  <div class="col-12">
                    <div>
                      <label for="name" class="form-label">Name</label>
                      <input class="form-control" type="text" name="name" id="name" placeholder="Ex. Jhon Doe" value="{{ old('name') }}" required autofocus autocomplete="name">
                      <x-input-error :messages="$errors->get('name')" class="mt-2 text-danger" />
                    </div>
                  </div>
                  <div class="col-12">
                    <div>
                      <label for="email" class="form-label">Email</label>
                      <input type="email" class="form-control" name="email" id="email" placeholder="Enter your email" value="{{ old('email') }}" required autocomplete="username">
                      <x-input-error :messages="$errors->get('email')" class="mt-2 text-danger" />
                    </div>
                  </div>
                  <div class="col-12">
                    <div class="form-pass">
                      <label for="password" class="form-label">Password</label>
                      <input type="password" class="form-control showhide-pass" name="password" id="password" placeholder="Password" required autocomplete="new-password">
                      <button type="button" id="btnToggle" class="form-pass__toggle"><i id="eyeIcon1"
                          class="fa fa-eye"></i></button>
                      <x-input-error :messages="$errors->get('password')" class="mt-2 text-danger" />
                    </div>
                  </div>
                  <div class="col-12">
                    <div class="form-pass">
                      <label for="password_confirmation" class="form-label">Confirm Password</label>
                      <input type="password" class="form-control showhide-pass" name="password_confirmation" id="password_confirmation"
                        placeholder="Re-type password" required autocomplete="new-password">
                      <button type="button" id="btnCToggle" class="form-pass__toggle"><i id="eyeIcon2"
                          class="fa fa-eye"></i></button>
                      <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2 text-danger" />
                    </div>
                  </div>
                </div>

                <button type="submit" class="trk-btn trk-btn--border trk-btn--primary d-block mt-4">Sign Up</button>
              </form>

              <div class="account__switch">
                <p>Already have an account? <a href="{{ route('login') }}">Login</a></p>
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
