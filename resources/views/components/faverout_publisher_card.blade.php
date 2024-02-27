<div class="shadow mt-5">
    <div class="border-2 border-l-black border-r-[#F5821F] border-t-black">
        <div class="flex flex-col lg:flex-row p-3 items-center ">
            <div class="w-full lg:w-[28%] flex items-center mb-4">
                @if($favorite_publisher->profile_photo_path)
                    <img class="mx-auto" src="{{ asset('profile/'.$favorite_publisher->profile_photo_path) }}" alt="">
                @else
                    <img class="mx-auto" src="{{ asset('assets/gentosha.png') }}" alt="">
                @endif
                <p class="text-center p-2 lg:hidden text-xl">
                    {{ $favorite_publisher->publisherDetail->company_name ?? '' }}
                </p>
            </div>
            <div class="w-full text-[10px]">
                <p class="text-center border-b-2 p-2 border-black hidden lg:block">
                    {{ $favorite_publisher->publisherDetail->company_name ?? '' }}
                </p>
                <div class="border-b-2 border-black flex items-center">
                    <h2 class="max-w-[220px] font-semibold p-2 bg-[#D9D9D9]">Description of Business</h2>
                    <p class="p-2">
                        {{ $favorite_publisher->publisherDetail->business_activities ?? '' }}
                    </p>
                </div>
                <div class="border-b-2 border-black flex items-center">
                    <h2 class="max-w-[220px] font-semibold p-2 bg-[#D9D9D9]">Capital</h2>
                    <p class="p-2">
                        {{ $favorite_publisher->publisherDetail->capital ?? '' }}
                    </p>
                </div>
                <div class="border-b-2 border-black flex items-center">
                    <h2 class="max-w-[220px] font-semibold p-2 bg-[#D9D9D9]">Area</h2>
                    <p class="p-2">
                        {{ $favorite_publisher->area ?? '' }}
                    </p>
                </div>
                <div class="border-b-2 border-black flex items-center">
                    <h2 class="max-w-[220px] font-semibold p-2 bg-[#D9D9D9]">Establishment Date</h2>
                    <p class="p-2">
                        {{ $favorite_publisher->publisherDetail->establishment_date ?? '' }}
                    </p>
                </div>
                <div class="grid lg:grid-cols-2 gap-y-2 lg:gap-0 mt-2">
                    <div
                        class="text-[10px] p-1 px-4 border-l-3 border-black bg-[#D9D9D9] flex justify-between items-center font-semibold">
                        <span>Editing Support</span><span class="bg-white p-1 px-6">
                            @if (isset($favorite_publisher->publisherDetail->editorial_support) && $favorite_publisher->publisherDetail->editorial_support == 1)
                                有り
                            @else
                                無し
                            @endif
                        </span>
                    </div>
                    <div
                        class="text-[10px] p-1 px-4 border-l-3 border-black bg-[#FAA74A] flex justify-between items-center font-semibold">
                        <span>Publication Support</span><span class="bg-white p-1 px-6">
                            @if (isset($favorite_publisher->publisherDetail->publication_support) && $favorite_publisher->publisherDetail->publication_support == 1)
                                有り
                            @else
                                無し
                            @endif
                        </span>
                    </div>
                </div>
            </div>
        </div>
        <div class="grid grid-cols-2">
            <a href="{{ url('/publisher_profile/'.$favorite_publisher->id) }}" class="p-3 px-5  flex items-center justify-between border-b-2 w-full bg-[#D9D9D9] border-b-[#F5821F] hover:bg-[#eee5e5]">
                <img src="{{ asset('assets/txt.png') }}" alt="">
                <span>出版社詳細</span>
                <img src="{{ asset('assets/forward.png') }}" alt="">
            </a>
            @if ( Auth::check() == true && Auth::user()->type == 'booker')
                <a href="{{ route('favorite_unfavorite_publisher', ['id' => $favorite_publisher->id]) }}"
                    class="p-3 flex justify-between bg-[#F5821F] items-center hover:bg-[#ff8e2b] w-full">
                    <span>Favorite Publishers</span>
                        <img class="w-5 inline" src="{{ asset('assets/vector.png') }}" alt="">
                </a>
            @endif
            {{-- <button class="p-3  px-5 flex justify-between bg-[#F5821F] items-center hover:bg-[#ff8e2b]">
                <span>出版社詳細</span>
                <img src="{{ asset('assets/vector.png') }}" alt="">
            </button> --}}
        </div>
    </div>
</div>
