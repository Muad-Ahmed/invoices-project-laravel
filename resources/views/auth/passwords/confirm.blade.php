@extends('layouts.app')

@section('content')
<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card shadow-lg border-0 rounded-4">
                <div class="card-header bg-white border-0 pt-4 pb-0 text-center">
                    <h4 class="fw-bold text-dark">{{ __('Confirm Password') }}</h4>
                </div>

                <div class="card-body p-4">
                    <p class="text-muted text-center mb-4">
                        {{ __('Please confirm your password before continuing.') }}
                    </p>

                    <form method="POST" action="{{ route('password.confirm') }}">
                        @csrf

                        <div class="mb-4">
                            <label for="password" class="form-label fw-semibold">{{ __('Password') }}</label>
                            <input id="password" type="password" 
                                class="form-control form-control-lg @error('password') is-invalid @enderror" 
                                name="password" required autocomplete="current-password"
                                placeholder="••••••••">

                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="d-grid gap-2">
                            <button type="submit" class="btn btn-primary btn-lg shadow-sm">
                                {{ __('Confirm Password') }}
                            </button>

                            @if (Route::has('password.request'))
                                <a class="btn btn-link text-decoration-none" href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a>
                            @endif
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
