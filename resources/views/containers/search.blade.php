@extends('layouts.master')
@section('content')
    <img class="w-full hidden lg:block lg:absolute top-0 -z-10 " src="{{ asset('assets/search_bg.png') }}" alt="">
    <div class="max-w-4xl mx-auto mt-5 lg:mt-20 mb-5 p-4 lg:p-0 shadow">
        <h2 class="p-4 text-center bg-[#F5821F] font-bold text-white text-[20px]">Publisher Search</h2>
        <div class="flex items-center border-b-2 border-black">
            <div class="text-[13px] text-center p-4 h-full w-[200px] bg-[#FDE6D2] p-8">Cost</div>
            <div class="w-full py-4 lg:py-0 space-y-3 lg:flex items-center px-8  gap-3 ">
                <input class="w-full" type="number">
                <img class="hidden lg:block" src="{{ asset('assets/sign.png') }}" alt="">
                <input class="w-full" type="number">
            </div>
        </div>
        <div class="flex  border-b-2 border-black">
            <div class="text-[13px] text-center p-4  w-[200px] bg-[#FDE6D2] p-8">Terms & Conditions</div>
            <div class="w-full  px-8  text-[10px] space-y-2 p-4">
                <div class="space-x-2">
                    <input type="checkbox"><label for="">Editing/proofreading support OK</label>
                </div>
                <div class="space-x-2">
                    <input type="checkbox"><label for="">Editing/proofreading support OK</label>
                </div>
                <div class="space-x-2">
                    <input type="checkbox"><label for="">Editing/proofreading support OK</label>
                </div>
                <div class="space-x-2">
                    <input type="checkbox"><label for="">Editing/proofreading support OK</label>
                </div>
                <div class="space-x-2">
                    <input type="checkbox"><label for="">Editing/proofreading support OK</label>
                </div>
                <div class="space-x-2">
                    <input type="checkbox"><label for="">Editing/proofreading support OK</label>
                </div>
                <div class="space-x-2">
                    <input type="checkbox"><label for="">Editing/proofreading support OK</label>
                </div>
                <div class="space-x-2">
                    <input type="checkbox"><label for="">Editing/proofreading support OK</label>
                </div>
            </div>
        </div>
        <div class="flex  border-b-2 border-black">
            <div class="text-[13px] text-center p-4  w-[200px] bg-[#FDE6D2] p-8">Terms & Conditions</div>
            <div class="grid lg:grid-cols-3 w-full">

                <div class="w-full  px-8  text-[10px] space-y-2 p-4">
                    <div class="space-x-2">
                        <input type="checkbox"><label for="">Editing/proofreading support OK</label>
                    </div>
                    <div class="space-x-2">
                        <input type="checkbox"><label for="">Editing/proofreading support OK</label>
                    </div>
                    <div class="space-x-2">
                        <input type="checkbox"><label for="">Editing/proofreading support OK</label>
                    </div>
                    <div class="space-x-2">
                        <input type="checkbox"><label for="">Editing/proofreading support OK</label>
                    </div>
                    <div class="space-x-2">
                        <input type="checkbox"><label for="">Editing/proofreading support OK</label>
                    </div>
                    <div class="space-x-2">
                        <input type="checkbox"><label for="">Editing/proofreading support OK</label>
                    </div>
                    <div class="space-x-2">
                        <input type="checkbox"><label for="">Editing/proofreading support OK</label>
                    </div>

                </div>
                <div class="w-full  px-8  text-[10px] space-y-2 p-4">
                    <div class="space-x-2">
                        <input type="checkbox"><label for="">Editing/proofreading support OK</label>
                    </div>
                    <div class="space-x-2">
                        <input type="checkbox"><label for="">Editing/proofreading support OK</label>
                    </div>
                    <div class="space-x-2">
                        <input type="checkbox"><label for="">Editing/proofreading support OK</label>
                    </div>
                    <div class="space-x-2">
                        <input type="checkbox"><label for="">Editing/proofreading support OK</label>
                    </div>
                    <div class="space-x-2">
                        <input type="checkbox"><label for="">Editing/proofreading support OK</label>
                    </div>
                    <div class="space-x-2">
                        <input type="checkbox"><label for="">Editing/proofreading support OK</label>
                    </div>
                    <div class="space-x-2">
                        <input type="checkbox"><label for="">Editing/proofreading support OK</label>
                    </div>

                </div>
                <div class="w-full  px-8  text-[10px] space-y-2 p-4">
                    <div class="space-x-2">
                        <input type="checkbox"><label for="">Editing/proofreading support OK</label>
                    </div>
                    <div class="space-x-2">
                        <input type="checkbox"><label for="">Editing/proofreading support OK</label>
                    </div>
                    <div class="space-x-2">
                        <input type="checkbox"><label for="">Editing/proofreading support OK</label>
                    </div>
                    <div class="space-x-2">
                        <input type="checkbox"><label for="">Editing/proofreading support OK</label>
                    </div>
                    <div class="space-x-2">
                        <input type="checkbox"><label for="">Editing/proofreading support OK</label>
                    </div>
                    <div class="space-x-2">
                        <input type="checkbox"><label for="">Editing/proofreading support OK</label>
                    </div>
                    <div class="space-x-2">
                        <input type="checkbox"><label for="">Editing/proofreading support OK</label>
                    </div>

                </div>
            </div>
        </div>
        <div class="flex items-center border-b-2 border-black">
            <div class="text-[13px] text-center p-4 h-full w-[200px] bg-[#FDE6D2] p-8">area</div>
            <div class="w-full  px-8   ">
                <select class="w-[153px] p-2" name="" id="">
                    <option value="">text</option>
                    <option value="">text</option>
                    <option value="">text</option>
                    <option value="">text</option>
                </select>
            </div>
        </div>
        <p class="my-5 w-full text-center underline">I agree to the Terms of Use and Privacy Policy before submitting.</p>
        <div class="flex justify-center">
            <a href="search_result"
                class="w-[214px]  text-center p-3 bg-[#FAA74A] text-white hover:bg-[#ffa25b]">Search</a>
            {{-- <button class="">Search</button> --}}
        </div>

    </div>
@endsection
