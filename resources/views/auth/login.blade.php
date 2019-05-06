@extends('auth.master')



@section('content')


<div class="app-content content">
    <div class="content-wrapper">
      <div class="content-header row">
      </div>
      <div class="content-body">
        <section class="flexbox-container">
          <div class="col-12 d-flex align-items-center justify-content-center">
            <div class="col-md-4 col-10 box-shadow-2 p-0">
              <div class="card border-grey border-lighten-3 m-0">
                <div class="card-header border-0">
                  <div class="card-title text-center">
                    <div class="p-1">
                      <img src="../../../app-assets/images/logo/stack-logo-dark.png" alt="branding logo">
                    </div>
                  </div>
                  <h6 class="card-subtitle line-on-side text-muted text-center font-small-3 pt-2">
                    <span>ACCEDI</span>
                  </h6>
                </div>
                <div class="card-content">
                  <div class="card-body">
                       <form method="POST" class="form-horizontal form-simple" action="{{ route('login') }}">
                        @csrf
                      <fieldset class="form-group position-relative has-icon-left mb-0">
                        <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }} form-control-lg" name="email" value="{{ old('email') }}" required autofocus>

                            @if ($errors->has('email'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                            @endif

                        <div class="form-control-position">
                          <i class="ft-user"></i>
                        </div>
                      </fieldset>
                      <fieldset class="form-group position-relative has-icon-left">
                        <input id="password" type="password" class="form-control form-control-lg {{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                            @if ($errors->has('password'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                            @endif
                        <div class="form-control-position">
                          <i class="fa fa-key"></i>
                        </div>
                      </fieldset>
                      <div class="form-group row">
                        <div class="col-md-6 col-12 text-center text-md-left">
                          <fieldset>
                            <input class="chk-remember" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                <label class="form-check-label" for="remember">
                                    {{ __('Remember Me') }}
                                </label>
                          </fieldset>
                        </div>
                        <div class="col-md-6 col-12 text-center text-md-right">
                             @if (Route::has('password.request'))
                                    <a class="card-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                        </div>
                      </div>
                        <button type="submit" class="btn btn-primary btn-lg btn-block">
                                    {{ __('Login') }}
                                </button>
                    </form>
                  </div>
                </div>
                <div class="card-footer">
                  <div class="">
                    {{-- <p class="float-sm-left text-center m-0"><a href="recover-password.html" class="card-link">Recover password</a></p> --}}
                    <p class="float-sm-right text-center m-0">Vuoi creare un account? <a href="{{ route('register') }}" class="card-link">Registrati</a></p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
      </div>
    </div>
  </div>




@endsection
