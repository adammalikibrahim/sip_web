
{{-- CSS --}}
<link rel="stylesheet" href="{{url('assets/style/login.css')}}">

<div class="container">
    <div class=" form-section mt-5 ">
        <div class="col-6 " >
            <div class="test">
                <img src="{{url('assets/img/foto.png')}}" class="form-img" alt="">

                <div class="text">
                    Selamat Datang di
                </div>
                <div class="sip">
                <img src="{{url('assets/img/logo sip.png')}}" class="" alt="">
                </div>
                <div class="f">
                <img src="{{url('assets/img/f.png')}}" class="w" alt=""> <br>
                Sistem Informasi Prestasi Mahasiswa <br>
                Kemahasiswaan Fakultas Rekayasa Industri - Universitas Telkom
                </div>
            </div>
        </div>
        <div class="col-6 mt-5">
            <form method="POST" action="{{route('login')}}" class="form">
                @csrf


                <h2 class="form-title">LOGIN</h2>
                <h4>welcome back</h4>

                <div class="form-group">
                    <input  id ="email" type="email" class="form-input @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                    <label  for ="email" type="form-label">{{ __('Email')}}</label>
                    @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                </div>

                <div class="form-group">
                    <input id="password" type="password" class="form-input @error('password') is-invalid @enderror" name="password" required autocomplete="current-password ">
                    <label for="password" class="form-label">{{ __('Password') }}</label>

                    @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                </div>
                <div class="form-flex">
                    <div class="form-check">
                        <input  class="form-check-input" type="checkbox"  name="remember" id="remember"  {{ old('remember') ? 'checked' : '' }}>
                        <label for="rememberme" class="check-label"> {{ __('Remember Me') }}
                        </div>
                    </div>
                    @if (Route::has('password.request'))
                    <a class="btn btn-link" href="{{ route('password.request') }}">
                        {{ __('Forgot Your Password?') }}
                    </a>
                @endif

                <button type="submit" class="form-button">
                    {{ __('Login') }}
                </button>

            </form>
        </div>
    </div>
</div>

