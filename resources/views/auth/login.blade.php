@extends('includes.header')
    <h4 class="text-center my-4">{{__('SRMS')}}</h4>
    <div class="card col-md-4 mx-auto my-4">
        <div class="card-header bg-white">
            <h4 class="text-center">{{__('Login')}}</h4>
        </div>
        <div class="card-body">
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <div class="form-group">
                    <label for="username">{{__('Username')}}</label>
                    <input type="text" name="email" id="username" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="password">{{__('Password')}}</label>
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="mb-3">
                    <div class="col-md-6 offset-md-4">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                            <label class="form-check-label" for="remember">
                                {{ __('Remember Me') }}
                            </label>
                        </div>
                    </div>
                </div>
                <div class="mb-3">
                    {{-- <div class="form-group"> --}}
                    <input type="submit" name="submit" value="Login" class="form-control bg-primary text-white">
                </div>

                <div class="mb-0">
                    @if (Route::has('password.request'))
                        <a class="btn btn-link" href="{{ route('password.request') }}">
                            {{ __('Forgot Your Password?') }}
                        </a>
                    @endif
                </div>
            </form>
        </div>
    </div>
