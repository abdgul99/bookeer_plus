@extends('layouts.master')
@section('content')
    <img class="w-full absolute top-5 sm:top-0 lg:top-0 -z-10   2xl:h-[650px] " src="{{ asset('assets/orange_bg.png') }}"
        alt="">
    <div class="mt-10 lg:mt-40 max-w-2xl mx-auto space-y-6 p-8 lg:sm-p-0">
        <div>
            <img class="w-full" src="{{ asset('assets/ss1.png') }}" alt="">
        </div>
        <div>
            <img class="w-full" src="{{ asset('assets/ss2.png') }}" alt="">
        </div>
    </div>
@endsection
