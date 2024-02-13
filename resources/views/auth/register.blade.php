@extends('layouts.app')

@section('content')
    <div class=" max-w-sm mx-auto shadow-2xl border border-gray-200 rounded-2xl flex justify-center items-center">
        <div class="mx-auto text-center py-7 p-12  w-full">
            <div class="">
                <div class="">

                    <a href="/"><img class="mx-auto" src="{{ asset('assets/logo.png') }}" alt=""></a>
                    <p class=" text-[#CA8EEE] font-serif mt-3 ">
                        {{ __('Register') }}
                    </p>

                    <div class="my-12 w-full">
                        <form method="POST" class="my-12 w-full" action="{{ route('register') }}">
                            @csrf

                            <div class="row mb-3">
                                <label for="name" class="">{{ __('Name') }}</label>

                                <div class="">
                                    <input id="name" type="text"
                                        class="p-2 text-sm w-full border-0 focus:border-0 focus:outline-none focus:ring-0 focus:border-b-black"
                                        name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="email" class="">{{ __('Email Address') }}</label>

                                <div class="">
                                    <input id="email" type="email"
                                        class="p-2 text-sm w-full border-0 focus:border-0 focus:outline-none focus:ring-0 focus:border-b-black"
                                        name="email" value="{{ old('email') }}" required autocomplete="email">

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="password" class="">{{ __('Password') }}</label>

                                <div class="">
                                    <input id="password" type="password"
                                        class="p-2 text-sm w-full border-0 focus:border-0 focus:outline-none focus:ring-0 focus:border-b-black"
                                        name="password" required autocomplete="new-password">

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="password-confirm" class="">{{ __('Confirm Password') }}</label>

                                <div class="">
                                    <input id="password-confirm" type="password"
                                        class="p-2 text-sm w-full border-0 focus:border-0 focus:outline-none focus:ring-0 focus:border-b-black"
                                        name="password_confirmation" required autocomplete="new-password">
                                </div>
                            </div>

                            <div class="row mb-0">
                                <div class="bg-[#CA8EEE]  text-white rounded-2xl w-full p-2 flex justify-evenly">
                                    <button type="submit" class="">
                                        {{ __('Register') }}
                                    </button>
                                    <img class="w-[16px]" src="{{ asset('assets/arrow.png') }}" alt=""> </a>
                                </div>
                                {{-- <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Register') }}
                                    </button>
                                </div> --}}
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@extends('layouts.app')
