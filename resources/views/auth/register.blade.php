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
              <div class="card border-grey border-lighten-3 px-2 py-2 m-0">
                <div class="card-header border-0">
                  <div class="card-title text-center">
                    <img src="../../../app-assets/images/logo/stack-logo-dark.png" alt="branding logo">
                  </div>
                  <h6 class="card-subtitle line-on-side text-muted text-center font-small-3 pt-2">
                    <span>Crea Account</span>
                  </h6>
                </div>
                <div class="card-content">
                  <div class="card-body">
                      @if(session()->has('message'))
                        <div class="alert alert-success">
                          {{ session()->get('message') }}
                        </div>
                      @endif
                    <form method="POST" class="form-horizontal form-simple" action="{{ route('register') }}" novalidate>
                         @csrf

                      <fieldset class="form-group position-relative has-icon-left mb-1">
                        <input id="name" type="text" class="form-control form-control-lg{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" placeholder="Inserisci il tuo nome" value="{{ old('name') }}" required autofocus>
                            @if ($errors->has('name'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('name') }}</strong>
                                </span>
                            @endif
                        <div class="form-control-position">
                          <i class="ft-user"></i>
                        </div>
                      </fieldset>

                      {{-- <fieldset class="form-group position-relative has-icon-left mb-1">
                        <input id="username" type="text" class="form-control form-control-lg{{ $errors->has('username') ? ' is-invalid' : '' }}" name="username" placeholder="Inserisci il tuo username" value="{{ old('username') }}" required autofocus>
                            @if ($errors->has('username'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('username') }}</strong>
                                </span>
                            @endif
                        <div class="form-control-position">
                          <i class="ft-user"></i>
                        </div>
                      </fieldset> --}}

                      <fieldset class="form-group position-relative has-icon-left mb-1">
                        <input id="email" type="email" class="form-control form-control-lg{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" placeholder="Inserisci la tua email" required>
                            @if ($errors->has('email'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                            @endif
                        <div class="form-control-position">
                          <i class="ft-mail"></i>
                        </div>
                      </fieldset>
                      <fieldset class="form-group position-relative has-icon-left mb-1">
                        <input id="password" type="password" class="form-control form-control-lg{{ $errors->has('password') ? ' is-invalid' : '' }}"  placeholder="Inserisci Password" name="password" required>
                            @if ($errors->has('password'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                            @endif
                        <div class="form-control-position">
                          <i class="fa fa-key"></i>
                        </div>
                      </fieldset>

                        <fieldset class="form-group position-relative has-icon-left">
                            <input id="password-confirm" type="password" class="form-control form-control-lg" name="password_confirmation" placeholder="Reinsirisci Password" required>
                        <div class="form-control-position">
                          <i class="fa fa-key"></i>
                        </div>
                      </fieldset>

                      <button type="submit" class="btn btn-primary btn-lg btn-block"><i class="ft-unlock"></i> Registrati</button>
                    </form>
                  </div>
                  <p class="text-center">Sei gia registrato ? <a href="{{route('login')}}" class="card-link">Accedi</a></p>
                </div>
              </div>
            </div>
          </div>
        </section>
      </div>
    </div>
  </div>



@endsection
