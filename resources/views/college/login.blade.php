@extends('layouts.master')

@section('content')

  <div class="limiter">
    <div class="container-login100" style="background-image: url('{{ asset('img/3.png') }}');">
      <div class="wrap-login100">
        <form class="login100-form validate-form" autocomplete="off">
          <span class="login100-form-logo">
            <i class='fab fa-atlassian' style='font-size:60px;color:#7293b4'></i>
          </span>

          <span class="login100-form-title">
            Log in
          </span>

          <div class="wrap-input100 validate-input" data-validate = "Enter username">
            <input class="input100" type="text" name="username" placeholder="Username">
            <i class='fas fa-user-alt'></i>
          </div>

          <div class="wrap-input100 validate-input" data-validate="Enter password">
            {{-- <span class="btn-show-pass fas"></span> --}}
            <input class="input100" type="password" name="pass" placeholder="Password">
            <i class='fas fa-lock'></i>
          </div>

          <div class="contact100-form-checkbox">
            <input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">
            <label class="label-checkbox100" for="ckb1">
              <i class='fas fa-check'></i>
              Remember me
            </label>
          </div>

          <div class="container-login100-form-btn">
            <button class="login100-form-btn">
              Login
            </button>
          </div>

          <div class="text-center txt_1">
            <a class="txt1" href="#">
              Forgot Password?
            </a>
          </div>
        </form>
      </div>
    </div>
  </div>

@endsection
