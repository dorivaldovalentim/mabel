@extends('layouts.auth')

@section('title', 'Iniciar Sessão')

@section('content')

    <div class="body-wrapper">
        <div class="main-wrapper">
            <div class="page-wrapper full-page-wrapper d-flex align-items-center justify-content-center">
                <main class="auth-page">
                    <div class="mdc-layout-grid">
                        <div class="mdc-layout-grid__inner">
                            <div class="stretch-card mdc-layout-grid__cell--span-4-desktop mdc-layout-grid__cell--span-1-tablet"></div>

                            <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-4-desktop mdc-layout-grid__cell--span-6-tablet">
                                <div class="mdc-card">
                                    <form method="POST" action="{{ route('login') }}">
                                        @csrf

                                        <div class="mdc-layout-grid">
                                            <div class="mdc-layout-grid__inner">
                                                <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-12">
                                                    <div class="mdc-text-field w-100">
                                                        <input type="email" name="email" class="mdc-text-field__input @error('email') is-invalid @enderror" id="text-field-hero-input" value="{{ old('email') }}" required autocomplete="email" autofocus />
                                                        <div class="mdc-line-ripple"></div>
                                                        <label for="text-field-hero-input" class="mdc-floating-label">E-mail</label>
                                                    </div>
                                                </div>

                                                @error('email')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror

                                                <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-12">
                                                    <div class="mdc-text-field w-100">
                                                        <input type="password" name="password" class="mdc-text-field__input @error('password') is-invalid @enderror" id="text-field-hero-input" required autocomplete="current-password" />
                                                        <div class="mdc-line-ripple"></div>
                                                        <label for="text-field-hero-input" class="mdc-floating-label">Senha</label>
                                                    </div>

                                                    @error('password')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>

                                                <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-6-desktop">
                                                    <div class="mdc-form-field">
                                                        <div class="mdc-checkbox">
                                                            <input type="checkbox" name="remember" class="mdc-checkbox__native-control" id="checkbox-1" {{ old('remember') ? 'checked' : '' }} />
                                                            <div class="mdc-checkbox__background">
                                                                <svg class="mdc-checkbox__checkmark" viewBox="0 0 24 24">
                                                                    <path class="mdc-checkbox__checkmark-path" fill="none"
                                                                        d="M1.73,12.91 8.1,19.28 22.79,4.59" />
                                                                </svg>
                                                                <div class="mdc-checkbox__mixedmark"></div>
                                                            </div>
                                                        </div>

                                                        <label for="checkbox-1">Lembrar-me</label>
                                                    </div>
                                                </div>

                                                @if (Route::has('password.request'))
                                                    <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-6-desktop d-flex align-items-center justify-content-end">
                                                        <a href="{{ route('password.request') }}">Forgot Password</a>
                                                    </div>
                                                @endif

                                                <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-12">
                                                    <button type="submit" class="mdc-button mdc-button--raised w-100">
                                                        Login
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div
                                class="stretch-card mdc-layout-grid__cell--span-4-desktop mdc-layout-grid__cell--span-1-tablet">
                            </div>
                        </div>
                    </div>
                </main>
            </div>
        </div>
    </div>

@endsection
