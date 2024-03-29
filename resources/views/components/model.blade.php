<!-- Modal toggle -->


<!-- Main modal -->
<div id="default-modal" tabindex="-1" aria-hidden="true"
    class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative p-4 w-full max-w-2xl max-h-full">
        <!-- Modal content -->
        <div class="relative bg-white rounded-lg shadow pb-4">
            <!-- Modal header -->
            <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                    Terms of Service
                </h3>
                <button type="button"
                    class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                    data-modal-hide="default-modal">
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
            </div>
            <!-- Modal body -->
            <div class="max-w-4xl mx-auto mt-5 lg:mt-20 mb-5 p-4 lg:p-0 shadow">
                <h2 class="p-4 text-center bg-[#F5821F] font-bold text-white text-[20px]">Publisher Search</h2>
                {{-- errors --}}
                @if ($errors->any())
                    <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative"
                        role="alert">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <form action="" method="GET">

                    <div class="flex items-center border-b-2 border-black">
                        <div class="text-[13px] text-center p-4 h-full w-[200px] bg-[#FDE6D2] p-8 min-h-[120px]">Cost
                        </div>
                        <div class="w-full py-4 lg:py-0 space-y-3 lg:flex items-center px-8  gap-3 ">
                            <input class="w-full" type="number" name="from">
                            <img class="hidden lg:block" src="{{ asset('assets/sign.png') }}" alt="">
                            <input class="w-full" type="number" name="to">
                        </div>
                    </div>
                    <div class="flex  border-b-2 border-black">
                        <div class="text-[13px] text-center p-4  w-[200px] bg-[#FDE6D2] p-8">Support</div>
                        <div class="w-full  px-8  text-[10px] space-y-2 p-4">
                            <div class="space-x-2">
                                <input type="checkbox" name="editorial"><label for="">Editing/proofreading
                                    support
                                    OK</label>
                            </div>
                            <div class="space-x-2">
                                <input type="checkbox" name="card"><label for="">Credit Card Payment</label>
                            </div>
                            <div class="space-x-2">
                                <input type="checkbox" name="ebook"><label for="">E-book OK</label>
                            </div>
                            <div class="space-x-2">
                                <input type="checkbox" name="commercial"><label for="">Commercial publishing
                                    Consultation
                                    OK</label>
                            </div>
                            <div class="space-x-2">
                                <input type="checkbox" name="distribution"><label for="">Distrbution
                                    support</label>
                            </div>
                            <div class="space-x-2">
                                <input type="checkbox" name="design"><label for="">Design
                                    (bookbuilding)</label>
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
                        <div class="text-[13px] text-center p-4  w-[200px] bg-[#FDE6D2] p-4">Genres</div>
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
                        <div class="text-[13px] text-center p-4 h-full w-[200px] bg-[#FDE6D2] p-8 min-h-[120px]">area
                        </div>
                        <div class="w-full  px-8   ">
                            <select class="w-[130px] lg:w-[153px] p-2" name="area" id="area">
                                <option value="">Select Area</option>
                                @if ($support_area)
                                    @foreach ($support_area as $area)
                                        <option value="{{ $area->name }}">{{ $area->name }}</option>
                                    @endforeach
                                @endif
                            </select>
                        </div>
                    </div>
                    <div class="p-5">
                        <label for="terms" class="text-[#F58220]"><input type="checkbox" name="terms" id="terms"
                                class="me-2" required>I agree to the Terms of Use and Privacy Policy before submitting</label>

                    </div>
                    <div class="flex justify-center">
                        <button type="submit"
                            class="w-[214px]  text-center p-3 bg-[#FAA74A] text-white hover:bg-[#ffa25b]">Search</button>
                        {{-- <button class="">Search</button> --}}
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>
