@extends('layouts.app')

@section('content')
<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-md-6 col-lg-5">
            <div class="card border-0 shadow-lg rounded-4">
                <div class="card-header bg-primary text-white text-center py-3 rounded-top-4">
                    <h5 class="mb-0 fw-bold">{{ __('Reset Password') }}</h5>
                </div>

                <div class="card-body p-4">
                    @if (session('status'))
                        <div class="alert alert-success border-0 shadow-sm mb-4" role="alert">
                            <i class="bi bi-check-circle-fill me-2"></i>
                            {{ session('status') }}
                        </div>
                    @endif

                    <p class="text-muted text-center mb-4">
                        {{ __('Enter your email address and we will send you a link to reset your password.') }}
                    </p>

                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf

                        <div class="mb-3">
                            <label for="email" class="form-label fw-semibold">{{ __('E-Mail Address') }}</label>
                            <input id="email" type="email" 
                                   class="form-control form-control-lg @error('email') is-invalid @enderror" 
                                   name="email" value="{{ old('email') }}" 
                                   placeholder="name@example.com"
                                   required autocomplete="email" autofocus>

                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="d-grid gap-2 mt-4">
                            <button type="submit" class="btn btn-primary btn-lg rounded-3 shadow-sm">
                                {{ __('Send Reset Link') }}
                            </button>
                        </div>

                        <div class="text-center mt-3">
                            <a class="btn btn-link text-decoration-none" href="{{ route('login') }}">
                                <i class="bi bi-arrow-left"></i> {{ __('Back to Login') }}
                            </a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
