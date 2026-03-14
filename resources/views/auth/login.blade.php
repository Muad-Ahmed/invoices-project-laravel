@extends('layouts.master2')

@section('title')
    تسجيل الدخول - مورا سوفت برنامج الفواتير
@stop

@section('css')
    <link href="{{ URL::asset('assets/plugins/sidemenu-responsive-tabs/css/sidemenu-responsive-tabs.css') }}" rel="stylesheet">
    <style>
        .login-page { background: #f8f9fa; min-height: 100vh; }
        .card-sigin { border: none; box-shadow: 0 4px 15px rgba(0,0,0,0.05); border-radius: 15px; padding: 2rem; }
        .main-logo1 span { color: #0162e8; font-weight: bold; }
        .btn-main-primary { border-radius: 8px; padding: 10px; font-weight: 600; transition: all 0.3s; }
        .btn-main-primary:hover { transform: translateY(-2px); box-shadow: 0 5px 15px rgba(1, 98, 232, 0.4); }
    </style>
@endsection

@section('content')
    <div class="container-fluid login-page">
        <div class="row no-gutter">
            <div class="col-md-6 col-lg-5 col-xl-4 bg-white d-flex align-items-center justify-content-center">
                <div class="login py-4 wd-100p">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-11 col-lg-11 col-xl-10 mx-auto">
                                <div class="card-sigin bg-white">
                                    <div class="mb-4 text-center">
                                        <a href="{{ url('/' . ($page = 'Home')) }}" class="d-block mb-2">
                                            <img src="{{ URL::asset('assets/img/brand/favicon.png') }}" class="sign-favicon ht-50" alt="logo">
                                        </a>
                                        <h1 class="main-logo1 tx-30 text-dark">Mora<span>So</span>ft</h1>
                                    </div>

                                    <div class="main-signup-header text-right">
                                        <h2 class="text-primary mb-2">مرحباً بك</h2>
                                        <h5 class="font-weight-normal mb-4 text-muted">يرجى تسجيل الدخول للمتابعة</h5>
                                        
                                        <form method="POST" action="{{ route('login') }}">
                                            @csrf
                                            
                                            <div class="mb-3">
                                                <label class="form-label font-weight-bold">البريد الالكتروني</label>
                                                <input id="email" type="email" class="form-control rounded-3 @error('email') is-invalid @enderror" 
                                                       name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="example@mail.com">
                                                @error('email')
                                                    <div class="invalid-feedback"><strong>{{ $message }}</strong></div>
                                                @enderror
                                            </div>

                                            <div class="mb-3">
                                                <label class="form-label font-weight-bold">كلمة المرور</label>
                                                <input id="password" type="password" class="form-control rounded-3 @error('password') is-invalid @enderror" 
                                                       name="password" required autocomplete="current-password" placeholder="••••••••">
                                                @error('password')
                                                    <div class="invalid-feedback"><strong>{{ $message }}</strong></div>
                                                @enderror
                                            </div>

                                            <div class="mb-4 d-flex align-items-center">
                                                <div class="form-check custom-checkbox">
                                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                                    <label class="form-check-label mr-4" for="remember">
                                                        {{ __('تذكرني') }}
                                                    </label>
                                                </div>
                                            </div>

                                            <button type="submit" class="btn btn-main-primary btn-block shadow-sm">
                                                {{ __('تسجيل الدخول') }}
                                            </button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-7 col-xl-8 d-none d-md-flex bg-primary-transparent align-items-center justify-content-center">
                <div class="text-center">
                    <img src="{{ URL::asset('assets/img/media/login.png') }}" class="img-fluid wd-xl-70p mx-auto" alt="login image">
                </div>
            </div>

        </div>
    </div>
@endsection

@section('js')
@endsection
