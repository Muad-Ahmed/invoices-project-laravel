@extends('layouts.app')

@section('content')
<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-md-7 col-lg-5">
            <div class="card shadow-lg border-0 rounded-4">
                <div class="card-body p-5 text-center">
                    <div class="mb-4">
                        <div class="display-1 text-primary">
                            <i class="bi bi-envelope-check"></i>
                        </div>
                    </div>

                    <h3 class="fw-bold mb-3">{{ __('Verify Your Email') }}</h3>
                    
                    <p class="text-muted mb-4">
                        {{ __('Before proceeding, please check your email for a verification link.') }}
                        {{ __('We sent a link to your inbox to make sure it\'s really you.') }}
                    </p>

                    @if (session('resent'))
                        <div class="alert alert-success border-0 shadow-sm mb-4" role="alert">
                            <i class="bi bi-check-circle-fill me-2"></i>
                            {{ __('A fresh verification link has been sent to your email address.') }}
                        </div>
                    @endif

                    <hr class="my-4 text-secondary opacity-25">

                    <p class="small text-secondary mb-3">
                        {{ __('If you did not receive the email') }}
                    </p>

                    <form class="d-grid" method="POST" action="{{ route('verification.resend') }}">
                        @csrf
                        <button type="submit" class="btn btn-primary btn-lg shadow-sm rounded-pill">
                            {{ __('Resend Verification Email') }}
                        </button>
                    </form>

                    <div class="mt-4">
                        <a href="{{ route('logout') }}" class="text-decoration-none small text-danger fw-bold"
                           onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            {{ __('Logout and try again') }}
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
