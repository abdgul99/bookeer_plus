@extends('layouts.app')

@section('content')
    <div class="min-h-[75vh] flex items-center justify-center">
        <div class=" max-w-sm mx-auto shadow-2xl border border-gray-200 rounded-2xl flex justify-center items-center">
            <div class="mx-auto text-center py-7 p-12  w-full">
                <a href="/"><img class="mx-auto" src="{{ asset('assets/logo.png') }}" alt=""></a>
                <p class=" text-[#CA8EEE] font-serif mt-3 ">admin pannel</p>

                <div class="my-12 w-full ">
                    <form class="w-full" method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="">
                            <div class="flex items-center gap-3">
                                <img src="" alt="">
                                <div class="w-full">
                                    <div class="flex  gap-3 items-center">
                                        <img class="w-[16px] h-[16px]" src="{{ asset('assets/profile.png') }}"
                                            alt="">
                                        <input id="email" type="email"
                                            class="w-full p-2 border border-gray-100 text-sm w-full focus:outline-none focus:ring-0 focus:border-b-black"
                                            name="email" placeholder="email" value="{{ old('email') }}" required
                                            autocomplete="email" autofocus>
                                    </div>

                                    @error('email')
                                        <span class="" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <div class="w-full mt-4">
                            <div class="flex items-center gap-3 w-full">
                                <img src="" alt="">
                                <div class="w-full">
                                    <div class="flex gap-3 items-center">
                                        <img class="w-[16px] h-[16px]" src="{{ asset('assets/lock.png') }}" alt="">
                                        <input id="password" type="password" placeholder="password"
                                            class="p-2 text-sm w-full border-0 focus:border-0 focus:outline-none focus:ring-0 focus:border-b-black"
                                            name="password" required autocomplete="current-password">
                                    </div>

                                    @error('password')
                                        <span class="" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                        </div>



                        <div class="mt-8 px-8">
                            <div class="bg-[#CA8EEE]  text-white rounded-2xl w-full p-2 flex justify-evenly">
                                <button type="submit" class="">
                                    {{ __('Login') }}
                                </button>
                                <img class="w-[16px]" src="{{ asset('assets/arrow.png') }}" alt="">

                                <!-- @if (Route::has('password.request'))
    <a class="btn btn-link" href="{{ route('password.request') }}">
                                                                                                    {{ __('Forgot Your Password?') }}
                                                                                                </a>
    @endif -->
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
