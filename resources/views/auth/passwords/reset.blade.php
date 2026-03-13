@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card shadow-sm border-0 rounded-lg">
                <div class="card-header bg-white border-bottom-0 pt-4 pb-0 text-center">
                    <h4 class="font-weight-bold">{{ __('Reset Password') }}</h4>
                    <p class="text-muted small">Please enter your new credentials below</p>
                </div>

                <div class="card-body p-4">
                    <form method="POST" action="{{ route('password.update') }}">
                        @csrf

                        <input type="hidden" name="token" value="{{ $token }}">

                        <div class="form-group mb-3">
                            <label for="email" class="form-label font-weight-bold small text-uppercase">{{ __('E-Mail Address') }}</label>
                            <input id="email" type="email" class="form-control form-control-lg @error('email') is-invalid @enderror" name="email" value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus placeholder="name@example.com">

                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group mb-3">
                            <label for="password" class="form-label font-weight-bold small text-uppercase">{{ __('New Password') }}</label>
                            <input id="password" type="password" class="form-control form-control-lg @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="••••••••">

                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group mb-4">
                            <label for="password-confirm" class="form-label font-weight-bold small text-uppercase">{{ __('Confirm Password') }}</label>
                            <input id="password-confirm" type="password" class="form-control form-control-lg" name="password_confirmation" required autocomplete="new-password" placeholder="••••••••">
                        </div>

                        <div class="form-group mb-0">
                            <button type="submit" class="btn btn-primary btn-lg btn-block shadow-sm">
                                <i class="fas fa-key mr-2"></i> {{ __('Update Password') }}
                            </button>
                        </div>
                    </form>
                </div>
                <div class="card-footer bg-light border-0 py-3 text-center">
                    <small class="text-muted">Ensure your new password is secure.</small>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
