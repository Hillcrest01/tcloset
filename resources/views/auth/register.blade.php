@extends('layouts.app')
@section('content')
  <main class="pt-90">
    <div class="mb-4 pb-4"></div>
    <section class="login-register container">
      <ul class="nav nav-tabs mb-5" id="login_register" role="tablist">
        <li class="nav-item" role="presentation">
          <a class="nav-link nav-link_underscore active" id="register-tab" data-bs-toggle="tab"
            href="#tab-item-register" role="tab" aria-controls="tab-item-register" aria-selected="true">Register</a>
        </li>
      </ul>
      <div class="tab-content pt-2" id="login_register_tab_content">
        <div class="tab-pane fade show active" id="tab-item-register" role="tabpanel" aria-labelledby="register-tab">
          <div class="register-form">
            <form method="POST" action="{{ route('register') }}" name="register-form" class="needs-validation" novalidate="">
                @csrf
              <div class="mb-3">
                <label for="name">Name</label>
                <input class="form-control form-control_gray " name="name" value="" required="" autocomplete="name"
                  autofocus="">
              </div>
              <div class="pb-3"></div>
              <div class="mb-3">
                <label for="email">Email address *</label>
                <input id="email" type="email" class="form-control form-control_gray " name="email" value="" required=""
                  autocomplete="email">
              </div>

              <div class="pb-3"></div>

              <div class="mb-3">
                <label for="mobile">Mobile *</label>
                <input id="mobile" type="text" class="form-control form-control_gray " name="mobile" value=""
                  required="" autocomplete="mobile">
              </div>

              <div class="pb-3"></div>

              <div class=" mb-3">
                <label for="password">Password *</label>
                <input id="password" type="password" class="form-control form-control_gray " name="password" required=""
                  autocomplete="new-password">
              </div>

              <div class="mb-3">
                <label for="password">Confirm Password *</label>
                <input id="password-confirm" type="password" class="form-control form-control_gray"
                  name="password_confirmation" required="" autocomplete="new-password">
              </div>

              <div class="d-flex align-items-center mb-3 pb-2">
                <p class="m-0">Your personal data will be used to support your experience throughout this website, to
                  manage access to your account, and for other purposes described in our privacy policy.</p>
              </div>

              <button class="btn btn-primary w-100 text-uppercase" type="submit">Register</button>

              <div class="customer-option mt-4 text-center">
                <span class="text-secondary">Have an account?</span>
                <a href="{{ route('login') }}" class="btn-text js-show-register">Login to your Account</a>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>
  </main>

  <hr class="mt-5 text-secondary" />
@endsection