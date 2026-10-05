@extends('admin.layouts.default', [
	'paceTop' => true,
	'appSidebarHide' => true,
	'appHeaderHide' => true,
	'appContentClass' => 'p-0'
])

@section('title', 'AltermedCRM - Admin Login')

@push('css')
<style>
    .login-modern {
        min-height: 100vh;
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        position: relative;
        overflow: hidden;
    }

    .login-modern::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 1000"><defs><pattern id="grain" width="100" height="100" patternUnits="userSpaceOnUse"><circle cx="25" cy="25" r="1" fill="%23ffffff" opacity="0.1"/><circle cx="75" cy="75" r="1" fill="%23ffffff" opacity="0.1"/><circle cx="50" cy="10" r="0.5" fill="%23ffffff" opacity="0.05"/><circle cx="90" cy="40" r="0.5" fill="%23ffffff" opacity="0.05"/></pattern></defs><rect width="100%" height="100%" fill="url(%23grain)"/></svg>');
        pointer-events: none;
    }

    .login-card {
        background: rgba(255, 255, 255, 0.95);
        backdrop-filter: blur(20px);
        border-radius: 20px;
        box-shadow: 0 20px 60px rgba(0, 0, 0, 0.15);
        border: 1px solid rgba(255, 255, 255, 0.2);
        animation: slideUp 0.8s ease-out;
    }

    @keyframes slideUp {
        from {
            opacity: 0;
            transform: translateY(30px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    .login-header {
        text-align: center;
        padding: 2rem 0;
        border-bottom: 1px solid rgba(0, 0, 0, 0.1);
    }

    .logo-container {
        margin-bottom: 1rem;
    }

    .logo-container img {
        max-width: 200px;
        height: auto;
        filter: drop-shadow(0 4px 8px rgba(0, 0, 0, 0.1));
    }

    .login-title {
        font-size: 2rem;
        font-weight: 700;
        color: #2c3e50;
        margin-bottom: 0.5rem;
        background: linear-gradient(135deg, #667eea, #764ba2);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
    }

    .login-subtitle {
        color: #6c757d;
        font-size: 0.95rem;
        margin-bottom: 0;
    }

    .login-body {
        padding: 2.5rem;
    }

    .form-group-modern {
        margin-bottom: 1.5rem;
        position: relative;
    }

    .form-control-modern {
        width: 100%;
        padding: 1rem 1.2rem;
        border: 2px solid #e9ecef;
        border-radius: 12px;
        font-size: 1rem;
        transition: all 0.3s ease;
        background: rgba(255, 255, 255, 0.8);
        backdrop-filter: blur(10px);
    }

    .form-control-modern:focus {
        border-color: #667eea;
        box-shadow: 0 0 0 0.2rem rgba(102, 126, 234, 0.25);
        background: rgba(255, 255, 255, 1);
        transform: translateY(-2px);
    }

    .form-control-modern::placeholder {
        color: #adb5bd;
        font-weight: 400;
    }

    .input-icon {
        position: absolute;
        right: 1rem;
        top: 50%;
        transform: translateY(-50%);
        color: #6c757d;
        font-size: 1.1rem;
    }

    .form-check-modern {
        margin-bottom: 1.5rem;
    }

    .form-check-input-modern {
        width: 1.2rem;
        height: 1.2rem;
        border: 2px solid #667eea;
        border-radius: 4px;
        margin-right: 0.75rem;
    }

    .form-check-input-modern:checked {
        background-color: #667eea;
        border-color: #667eea;
    }

    .form-check-label-modern {
        color: #495057;
        font-weight: 500;
        cursor: pointer;
    }

    .btn-login {
        width: 100%;
        padding: 1rem;
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        border: none;
        border-radius: 12px;
        color: white;
        font-size: 1.1rem;
        font-weight: 600;
        text-transform: uppercase;
        letter-spacing: 0.5px;
        transition: all 0.3s ease;
        position: relative;
        overflow: hidden;
    }

    .btn-login::before {
        content: '';
        position: absolute;
        top: 0;
        left: -100%;
        width: 100%;
        height: 100%;
        background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.2), transparent);
        transition: left 0.5s;
    }

    .btn-login:hover::before {
        left: 100%;
    }

    .btn-login:hover {
        transform: translateY(-2px);
        box-shadow: 0 10px 30px rgba(102, 126, 234, 0.4);
    }

    .btn-login:active {
        transform: translateY(0);
    }

    .login-footer {
        text-align: center;
        padding: 1.5rem 2.5rem;
        border-top: 1px solid rgba(0, 0, 0, 0.1);
        background: rgba(248, 249, 250, 0.5);
        border-radius: 0 0 20px 20px;
    }

    .login-footer-text {
        color: #6c757d;
        font-size: 0.9rem;
        margin: 0;
    }

    .login-footer-link {
        color: #667eea;
        text-decoration: none;
        font-weight: 600;
        transition: color 0.3s ease;
    }

    .login-footer-link:hover {
        color: #764ba2;
        text-decoration: underline;
    }

    .error-message {
        background: linear-gradient(135deg, #ff9a9e 0%, #fecfef 100%);
        color: #721c24;
        border: 1px solid #f5c6cb;
        border-radius: 8px;
        padding: 0.75rem 1rem;
        margin-bottom: 1rem;
        font-size: 0.9rem;
        animation: shake 0.5s ease-in-out;
    }

    @keyframes shake {
        0%, 100% { transform: translateX(0); }
        25% { transform: translateX(-5px); }
        75% { transform: translateX(5px); }
    }

    @media (max-width: 576px) {
        .login-card {
            margin: 1rem;
            border-radius: 15px;
        }

        .login-body {
            padding: 2rem 1.5rem;
        }

        .login-title {
            font-size: 1.75rem;
        }
    }
</style>
@endpush

@section('content')
<div class="login-modern d-flex align-items-center justify-content-center">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-5 col-md-7 col-sm-9">
                <div class="login-card">
                    <!-- Login Header -->
                    <div class="login-header">
                        <div class="logo-container">
                            <img src="{{ asset('images/logo-altermed.png') }}"
                                 alt="AltermedCRM"
                                 class="img-fluid">
                        </div>
                        <h1 class="login-title">Welcome Back</h1>
                        <p class="login-subtitle">Sign in to your AltermedCRM account</p>
                    </div>

                    <!-- Login Body -->
                    <div class="login-body">
                        @if (session('error'))
                            <div class="error-message">
                                <i class="fas fa-exclamation-triangle me-2"></i>
                                {{ session('error') }}
                            </div>
                        @endif

                        <form method="POST" action="{{ route('admin.login.submit') }}" novalidate>
                            @csrf

                            <!-- Email Field -->
                            <div class="form-group-modern">
                                <input id="email"
                                       type="email"
                                       name="email"
                                       value="{{ old('email') }}"
                                       class="form-control-modern @error('email') is-invalid @enderror"
                                       placeholder="Enter your email address"
                                       required
                                       autocomplete="email"
                                       autofocus>
                                <i class="fas fa-envelope input-icon"></i>
                                @error('email')
                                    <div class="error-message mt-2">
                                        <i class="fas fa-exclamation-circle me-1"></i>
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <!-- Password Field -->
                            <div class="form-group-modern">
                                <input id="password"
                                       type="password"
                                       name="password"
                                       class="form-control-modern @error('password') is-invalid @enderror"
                                       placeholder="Enter your password"
                                       required
                                       autocomplete="current-password">
                                <i class="fas fa-lock input-icon"></i>
                                @error('password')
                                    <div class="error-message mt-2">
                                        <i class="fas fa-exclamation-circle me-1"></i>
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <!-- Remember Me -->
                            <div class="form-check-modern d-flex align-items-center">
                                <input class="form-check-input-modern"
                                       type="checkbox"
                                       name="remember"
                                       id="rememberMe"
                                       {{ old('remember') ? 'checked' : '' }}>
                                <label class="form-check-label-modern mb-0" for="rememberMe">
                                    Remember me
                                </label>
                            </div>

                            <!-- Submit Button -->
                            <button type="submit" class="btn btn-login">
                                <i class="fas fa-sign-in-alt me-2"></i>
                                Sign In to Dashboard
                            </button>
                        </form>
                    </div>

                    <!-- Login Footer -->
                    <div class="login-footer">
                        <p class="login-footer-text">
                            <i class="fas fa-shield-alt me-1"></i>
                            Secure login powered by AltermedCRM
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
