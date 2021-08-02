{{--<x-guest-layout>--}}
{{--    <x-auth-card>--}}
{{--        <x-slot name="logo">--}}
{{--            <a href="/">--}}
{{--                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />--}}
{{--            </a>--}}
{{--        </x-slot>--}}

{{--        <!-- Validation Errors -->--}}
{{--        <x-auth-validation-errors class="mb-4" :errors="$errors" />--}}

{{--        <form method="POST" action="{{ route('register') }}">--}}
{{--        @csrf--}}

{{--        <!-- Name -->--}}
{{--            <div>--}}
{{--                <x-label for="name" :value="__('Name')" />--}}

{{--                <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus />--}}
{{--            </div>--}}

{{--            <!-- Email Address -->--}}
{{--            <div class="mt-4">--}}
{{--                <x-label for="email" :value="__('Email')" />--}}

{{--                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />--}}
{{--                @error('email')--}}
{{--                <label for="email" style="color: red;" class="form-label">{{$message}}</label>--}}
{{--                @enderror--}}
{{--            </div>--}}

{{--            <!-- Password -->--}}
{{--            <div class="mt-4">--}}
{{--                <x-label for="password" :value="__('Password')" />--}}

{{--                <x-input id="password" class="block mt-1 w-full"--}}
{{--                         type="password"--}}
{{--                         name="password"--}}
{{--                         required autocomplete="new-password" />--}}
{{--                @error('password')--}}
{{--                <label for="email" style="color: red;" class="form-label">{{$message}}</label>--}}
{{--                @enderror--}}
{{--            </div>--}}

{{--            <!-- Confirm Password -->--}}
{{--            <div class="mt-4">--}}
{{--                <x-label for="password_confirmation" :value="__('Confirm Password')" />--}}

{{--                <x-input id="password_confirmation" class="block mt-1 w-full"--}}
{{--                         type="password"--}}
{{--                         name="password_confirmation" required />--}}
{{--            </div>--}}

{{--            <div class="flex items-center justify-end mt-4">--}}
{{--                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">--}}
{{--                    {{ __('Already registered?') }}--}}
{{--                </a>--}}

{{--                <x-button class="ml-4">--}}
{{--                    {{ __('Register') }}--}}
{{--                </x-button>--}}
{{--            </div>--}}
{{--        </form>--}}
{{--    </x-auth-card>--}}
{{--</x-guest-layout>--}}








<!doctype html>
<!--
* Bootstrap Simple Admin Template
* Version: 2.1
* Author: Alexis Luna
* Website: https://github.com/alexis-luna/bootstrap-simple-admin-template
-->
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Sign up | Bootstrap Simple Admin Template</title>
    <link href="{{asset('assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/auth.css')}}" rel="stylesheet">
</head>

<body>
<div class="wrapper">
    <div class="auth-content">
        <div class="card">
            <div class="card-body text-center">
                <div class="mb-4">
                    <img class="brand" src="{{asset('assets/img/bootstraper-logo.png')}}" alt="bootstraper logo">
                </div>
                <h6 class="mb-4 text-muted">Create new account</h6>
                <form method="POST" action="{{ route('register') }}">
                    @csrf
                    <div class="mb-3 text-start">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" class="form-control" placeholder="Enter Name" name="name" :value="old('name')" required autofocus>

                    </div>
                    <div class="mb-3 text-start">
                        <label for="email" class="form-label">Email adress</label>
                        <input  class="form-control" placeholder="Enter Email" type="email" name="email" :value="old('email')" required >
                        @error('email')
                        <label for="email" style="color: red;" class="form-label">{{$message}}</label>
                        @enderror
                    </div>
                    <div class="mb-3 text-start">
                        <label for="password" class="form-label">Password</label>
                        <input id="password" type="password" class="form-control"
                               name="password" placeholder="Password" required>
                        @error('password')
                        <label for="email" style="color: red;" class="form-label">{{$message}}</label>
                        @enderror
                    </div>

                    <div class="mb-3 text-start">
                        <label for="password" class="form-label">Confirm Password</label>

                        <input type="password" id="password_confirmation" class="form-control" name="password_confirmation"  placeholder="Confirm password" required>
                    </div>

{{--                    <div class="mb-3 text-start">--}}
{{--                        <div class="form-check">--}}
{{--                            <input class="form-check-input" name="confirm" type="checkbox" value="" id="check1">--}}
{{--                            <label class="form-check-label" for="check1">--}}
{{--                                I agree to the <a href="#" tabindex="-1">terms and policy</a>.--}}
{{--                            </label>--}}
{{--                        </div>--}}
{{--                    </div>--}}
                    <button class="btn btn-primary shadow-2 mb-4">Register</button>
                </form>
                <p class="mb-0 text-muted">Allready have an account? <a href="{{route('login')}}">Log in</a></p>
            </div>
        </div>
    </div>
</div>
<script src="{{asset('assets/vendor/jquery/jquery.min.js')}}"></script>
<script src="{{asset('assets/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
</body>

</html>
