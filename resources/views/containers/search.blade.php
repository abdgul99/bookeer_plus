@extends('layouts.master')
@section('content')
    {{-- <img class="w-full hidden lg:block lg:absolute top-0 -z-10 " src="{{ asset('assets/search_bg.png') }}" alt=""> --}}
    <div class="max-w-4xl mx-auto mt-5 lg:mt-20 mb-5 p-4 lg:p-0 shadow">
        <h2 class="p-4 text-center bg-[#F5821F] font-bold text-white text-[20px]">Publisher Search</h2>
        {{-- errors --}}
        @if ($errors->any())
            <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action="{{ route('search_publisher_result') }}" method="GET">

            <div class="flex items-center border-b-2 border-black">
                <div class="text-[13px] text-center p-4  w-[200px] bg-[#FDE6D2] p-8 min-h-[120px]">Cost</div>
                <div class="w-full py-4 lg:py-0 space-y-3 lg:space-y-0 lg:flex items-center px-8  gap-3  ">
                    <input class="w-full" type="number" name="from">
                    <img class="hidden lg:block" src="{{ asset('assets/sign.png') }}" alt="">
                    <input class="w-full" type="number" name="to">
                </div>
            </div>
            <div class="flex  border-b-2 border-black">
                <div class="text-[13px] text-center p-4  w-[200px] bg-[#FDE6D2] p-8">Support</div>
                <div class="w-full  px-8  text-[10px] space-y-2 p-4">
                    <div class="space-x-2">
                        <input type="checkbox" name="editorial"><label for="">Editing/proofreading support
                            OK</label>
                    </div>
                    <div class="space-x-2">
                        <input type="checkbox" name="card"><label for="">Credit Card Payment</label>
                    </div>
                    <div class="space-x-2">
                        <input type="checkbox" name="ebook"><label for="">E-book OK</label>
                    </div>
                    <div class="space-x-2">
                        <input type="checkbox" name="commercial"><label for="">Commercial publishing Consultation
                            OK</label>
                    </div>
                    <div class="space-x-2">
                        <input type="checkbox" name="distribution"><label for="">Distrbution support</label>
                    </div>
                    <div class="space-x-2">
                        <input type="checkbox" name="design"><label for="">Design (bookbuilding)</label>
                    </div>
                    <div class="space-x-2">
                        <input type="checkbox" name="online"><label for="">Online Support</label>
                    </div>
                    <div class="space-x-2">
                        <input type="checkbox" name="advertising"><label for="">Advertising</label>
                    </div>
                </div>
            </div>
            <div class="flex  border-b-2 border-black">
                <div class="text-[13px] text-center p-4  w-[200px] bg-[#FDE6D2] p-8">Genres</div>
                <div class="grid w-full">

                    <div class="w-full grid grid-cols-2 lg:grid-cols-3 px-8  text-[10px] space-y-2 p-4">
                        @if (count($genres) > 0)
                            @foreach ($genres as $genre)
                                <div class="flex items-center gap-4">
                                    <input type="checkbox" name="genres[]" value="{{ $genre->id }}"><label
                                        for="">{{ $genre->name }}</label>
                                </div>
                            @endforeach
                        @endif
                    </div>
                </div>
            </div>
            <div class="flex items-center border-b-2 border-black">
                <div class="text-[13px] text-center p-4 h-full w-[200px] bg-[#FDE6D2] p-8">area</div>
                <div class="w-full  px-8   ">
                    <select class="w-[153px] p-2" name="area" id="area">
                        <option value="">Select Area</option>
                        @if ($support_area)
                            @foreach ($support_area as $area)
                                <option value="{{ $area->name }}">{{ $area->name }}</option>
                            @endforeach
                        @endif
                    </select>
                </div>
            </div>
            <div>
                <label for="terms" class="text-[#F58220]"><input type="checkbox" name="terms" id="terms"
                        class="me-2" required>I agree to the Terms of Use and Privacy Policy before submitting</label>

            </div>
            {{-- <p class="my-5 w-full text-center underline">I agree to the Terms of Use and Privacy Policy before submitting.
            </p> --}}
            <div class="flex justify-center">
                <button type="submit"
                    class="w-[214px]  text-center p-3 bg-[#FAA74A] text-white hover:bg-[#ffa25b]">Search</button>
                {{-- <button class="">Search</button> --}}
            </div>
        </form>
    </div>
@endsection
