@extends('layouts.login')

@section('content')
<div class="d-flex justify-content-center align-self-center" style="margin-top:25px;">
<div class="login-box">
    <!-- /.login-logo -->
    <div class="card card-outline card-primary">
      <div class="card-header text-center">
      <img src="{{ asset('assets/dist/img/user-login.png')}}" class="img-fluid  img-circle" alt="User Image">
      </div>
      <div class="card-body">
        <p class="login-box-msg">Connectez Vous !</p>
  
        <form method="POST" action="{{ route('login') }}">
                        @csrf
                                  <div class="input-group mb-3">
            <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Email">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-envelope"></span>
              </div>
            </div>
            @error('email')
            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
            </span>
                                @enderror
          </div>
          <div class="input-group mb-3">
            <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password " placeholder="Mot de Passe">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-lock"></span>
              </div>
            </div>
            @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
          </div>
          <div class="row">
            <div class="col-8">

              <div class="icheck-primary">
              <div class="form-check">

                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                <label for="remember">
                            Se souvenir de moi
                </label>
                </div>             
            </div>

            </div>
            <!-- /.col -->
            <div class="text-center mt-2 mb-3">
              <button type="submit" class="btn btn-primary btn-block">SE CONNECTER</button>
            </div>
            <!-- /.col -->
          </div>
        </form>


      </div>
      <!-- /.card-body -->
    </div>
    <!-- /.card -->
    </div>
    </div>
  <!-- /.login-box -->
@endsection
