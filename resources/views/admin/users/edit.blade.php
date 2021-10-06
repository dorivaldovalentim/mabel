@extends('layouts.auth')

@section('title', 'Editar perfil de usuário')

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
                                    <form method="POST" action="{{ route('user.update', $user->id) }}">
                                        @csrf @METHOD('put')

                                        <div class="mdc-layout-grid">
                                            <div class="mdc-layout-grid__inner">
                                                <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-12">
                                                    <div class="mdc-text-field w-100">
                                                        <input type="text" name="username" class="mdc-text-field__input @error('username') is-invalid @enderror" id="text-field-hero-input" value="{{ $user->username }}" required autocomplete="username" autofocus disabled />
                                                        <div class="mdc-line-ripple"></div>
                                                        <label for="text-field-hero-input" class="mdc-floating-label">Nome de usuário</label>
                                                    </div>
                                                    @error('username')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                                
                                                <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-12">
                                                    <div class="mdc-text-field w-100">
                                                        <input type="text" name="first_name" class="mdc-text-field__input @error('first_name') is-invalid @enderror" id="text-field-hero-input" value="{{ $user->first_name }}" required autocomplete="first_name" autofocus />
                                                        <div class="mdc-line-ripple"></div>
                                                        <label for="text-field-hero-input" class="mdc-floating-label">Primeiro nome</label>
                                                    </div>
                                                    @error('first_name')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                                
                                                <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-12">
                                                    <div class="mdc-text-field w-100">
                                                        <input type="text" name="last_name" class="mdc-text-field__input @error('last_name') is-invalid @enderror" id="text-field-hero-input" value="{{ $user->last_name }}" required autocomplete="last_name" autofocus />
                                                        <div class="mdc-line-ripple"></div>
                                                        <label for="text-field-hero-input" class="mdc-floating-label">Último nome</label>
                                                    </div>
                                                    @error('last_name')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                                
                                                <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-12">
                                                    <div class="mdc-text-field w-100">
                                                        <input type="text" name="phone" class="mdc-text-field__input @error('phone') is-invalid @enderror" id="text-field-hero-input" value="{{ $user->phone }}" required autocomplete="phone" autofocus />
                                                        <div class="mdc-line-ripple"></div>
                                                        <label for="text-field-hero-input" class="mdc-floating-label">Telefone</label>
                                                    </div>
                                                    @error('phone')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>

                                                <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-12">
                                                    <div class="mdc-text-field w-100">
                                                        <input type="email" name="email" class="mdc-text-field__input @error('email') is-invalid @enderror" id="text-field-hero-input" value="{{ $user->email }}" required autocomplete="email" autofocus />
                                                        <div class="mdc-line-ripple"></div>
                                                        <label for="text-field-hero-input" class="mdc-floating-label">E-mail</label>
                                                    </div>
                                                    @error('email')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>

                                                <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-12">
                                                    <div class="mdc-text-field w-100">
                                                        <input type="password" name="password" class="mdc-text-field__input @error('password') is-invalid @enderror" id="text-field-hero-input" autocomplete="current-password" />
                                                        <div class="mdc-line-ripple"></div>
                                                        <label for="text-field-hero-input" class="mdc-floating-label">Senha</label>
                                                    </div>

                                                    @error('password')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>

                                                <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-12">
                                                    <div class="mdc-text-field w-100">
                                                        <input type="password" name="password_confirmation" class="mdc-text-field__input" id="text-field-hero-input" autocomplete="new-password" />
                                                        <div class="mdc-line-ripple"></div>
                                                        <label for="text-field-hero-input" class="mdc-floating-label">Confirmar Senha</label>
                                                    </div>
                                                </div>

                                                <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-12">
                                                    <button type="submit" class="mdc-button mdc-button--raised w-100">
                                                        Actualizar Perfil
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
