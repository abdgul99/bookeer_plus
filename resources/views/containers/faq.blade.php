@extends('layouts.master')
@section('content')
    <style>
        .bgGrayDiv, .bg-gray-200 {
            /* background-color: transparent; */
            position: relative;
            z-index: -1;
        }
        .orangeBG {
    background: url(assets/orange_bg_faq.png);
    background-repeat: no-repeat;
    width: 100%;
    height: 100vh;
    background-size: 100% 100%;
    position: absolute;
    top: -120px;
    z-index: -1;
}
@media screen and (max-width: 767px)
{
    .bgGrayDiv{
        background: #f58220;
    }
}
</style>
    <div class="orangeBG"></div>
    {{-- <img class="w-full absolute top-5 sm:top-0 lg:top-0 -z-10   2xl:h-[650px] " src="{{ asset('assets/orange_bg.png') }}" --}}
        {{-- alt=""> --}}
    <div class="mt-10 lg:mt-0 max-w-2xl mx-auto space-y-6 p-8 lg:sm-p-0">
        <div>
            <img class="w-full" src="{{ asset('assets/ss1.png') }}" alt="">
        </div>
        <div>
            <img class="w-full" src="{{ asset('assets/ss2.png') }}" alt="">
        </div>
    </div>
@endsection
