@extends('layouts.master')
@section('content')
    <img class="w-full absolute top-10 lg:top-0 -z-10" src="{{ asset('assets/profile_bg.png') }}" alt="">
    <div class="max-w-5xl  mx-auto text-2xl font-semibold mt-20 lg:mt-40 lg:bg-gray-100 border relative p-6 lg:p-0 mb-40 ">
        <div class="max-w-sm grid items-center mx-auto text-center">
            <h2 class="border-b-2 border-white lg:border-black text-white lg:text-black"><span>BOOKER </span><span
                    class="text-[#F58220]">Profile</span></h2>
        </div>
        @if(Session::has('message'))
            {{Session::get('message')}}
        @endif


        <div class="lg:flex">
            <div class="lg:w-[30%] p-6 ">
                <div class="shadow-2xl w-[179px] lg:w-full mx-auto bg-white">
                    <div class="relative">
                        <label for=""
                            class="bg-black text-white py-2 ps-8 pe-12 text-sm [clip-path:polygon(0_0,75%_0,100%_100%,0%_100%)]
                        ">Icon</label>
                    </div>
                    @if($user->profile_photo_path !== null)
                        <img class="mx-auto pt-8" src="{{ asset('assets/profile/' . $user->profile_photo_path) }}" alt="">
                    @elseif($user->gender == 'female' && $user->profile_photo_path == null)
                        <img class="mx-auto pt-8" src="{{ asset('assets/girl.png') }}" alt="">
                        @else
                        <img class="mx-auto pt-8" src="{{ asset('assets/nav_item_1.png') }}" alt="">
                    @endif
                    <div class="flex justify-center mt-5 pb-6">
                        {{-- <button class="mx-auto  text-[13px] bg-[#D9D9D9] px-5 ">edit</button> --}}
                        <form action="{{ route('profile.updateImagePublisher') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <input type="file" name="profile_photo_path" id="profile_photo_path" class="hidden" onchange="this.form.submit();">
                            <label for="profile_photo_path"
                                class="mx-auto  text-[13px] bg-[#D9D9D9] px-5 py-2 cursor-pointer">edit</label>
                            {{-- submit form after choose image --}}
                            <input type="submit" value="submit" class="hidden">

                        </form>
                    </div>
                </div>

                <div class="shadow-2xl mt-12 w-[179px] lg:w-full mx-auto bg-white">
                    <div class="relative">
                        <!-- <img src="{{ asset('assets/rectangle.png') }}" alt=""> -->
                        <label for=""
                            class="bg-black text-white py-2 ps-8 pe-12 text-sm [clip-path:polygon(0_0,75%_0,100%_100%,0%_100%)]
                        ">Name</label>
                    </div>
                    <p class="text-center font-bold text-xl my-5"> {{ $user->name ?? '' }}</p>
                    <div class="flex justify-center mt-5 pb-6">
                        <!-- Modal toggle -->
                        <button data-modal-target="default-modal" data-modal-toggle="default-modal" class="mx-auto  text-[13px] bg-[#D9D9D9] px-5 " type="button">
                            edit
                        </button>

                        <!-- Main modal -->
                        <div id="default-modal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                            <div class="relative p-4 w-full max-w-2xl max-h-full">
                                <!-- Modal content -->
                                <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                    <!-- Modal header -->
                                    <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                                        <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                                            Update Name
                                        </h3>
                                        <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="default-modal">
                                            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                                            </svg>
                                            <span class="sr-only">Close modal</span>
                                        </button>
                                    </div>
                                    <!-- Modal body -->
                                    <div class="p-4 md:p-5 space-y-4">
                                            <form action="{{ route('profile.updateNamePublisher') }}" method="POST">
                                                @csrf
                                                <div class="flex flex-col">
                                                    <label for="name" class="text-sm font-semibold text-gray-900 dark:text-gray-100">Name</label>
                                                    <input type="text" name="name" id="name" class="w-full border-2 border-gray-200 rounded-lg mb-2" value="{{ $user->name }}">
                                                </div>
                                                <div class="flex items-center justify-end space-x-3">
                                                    <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Update</button>
                                                    <button data-modal-hide="default-modal" type="button" class="py-2.5 px-5 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">Cancel</button>
                                                </div>
                                            </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <div>

        </div>
    </div>
    <div class="lg:w-[70%] px-8 ">
        <div class="shadow-2xl mt-12 bg-white">
            <div class="relative">
                <!-- <img src="{{ asset('assets/rectangle.png') }}" alt=""> -->
                <label for=""
                    class="bg-black text-white py-2 ps-8 pe-12 text-sm [clip-path:polygon(0_0,75%_0,100%_100%,0%_100%)]
                ">Comment</label>
            </div>
            <p class="text-center font-bold text-xl my-5"> {{ $user->comment ?? '' }}</p>
            <div class="flex justify-center mt-5 pb-6">
                <!-- Modal toggle -->
                <button data-modal-target="comment-modal" data-modal-toggle="comment-modal" class="mx-auto  text-[13px] bg-[#D9D9D9] px-5" type="button">
                    edit
                </button>

                <!-- Main modal -->
                <div id="comment-modal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                    <div class="relative p-4 w-full max-w-2xl max-h-full">
                        <!-- Modal content -->
                        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                            <!-- Modal header -->
                            <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                                <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                                    Comment
                                </h3>
                                <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="default-modal">
                                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                                    </svg>
                                    <span class="sr-only">Close modal</span>
                                </button>
                            </div>
                            <!-- Modal body -->
                            <div class="p-4 md:p-5 space-y-4">
                                    <form action="{{ route('profile.updateCommentPublisher') }}" method="POST">
                                        @csrf
                                        <div class="flex flex-col">
                                            <label for="comment" class="text-sm font-semibold text-gray-900 dark:text-gray-100">Comment</label>
                                            <textarea name="comment" id="comment" class="w-full border-2 border-gray-200 rounded-lg mb-2">{{ $user->comment }}</textarea>
                                        </div>
                                        <div class="flex items">
                                            <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Update</button>
                                            <button data-modal-hide="default-modal" type="button" class="py-2.5 px-5 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">Cancel</button>
                                        </div>
                                    </form>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <div>
            <div class="relative mt-8">
                <!-- <img src="{{ asset('assets/rectangle.png') }}" alt=""> -->
                <div>
                    <label for=""
                        class="bg-black text-white py-2 ps-8 pe-12 text-sm [clip-path:polygon(0_0,75%_0,100%_100%,0%_100%)]
                ">Basic
                        Information</label>
                </div>
                <div class="shadow-2xl  border p-0 bg-white">
                    <ul class=" text-[16px] mt-1">
                        <li class="grid grid-cols-3 border-b-2 border-black items-center"><span class="font-semibold p-2 bg-[#D9D9D9]">Genres</span>
                            <span>
                                {{-- print genresName coma separated --}}
                                @if($genresName)
                                    @foreach($genresName as $genre)
                                        {{-- if last remove comma add etc. --}}
                                        @if($loop->last)
                                            {{ $genre.' etc.' }}
                                        @else
                                            {{ $genre.',' }}
                                        @endif
                                    @endforeach
                                @endif
                            </span>
                            <span class="flex justify-end me-5">


                            <!-- Modal toggle -->
                            <button data-modal-target="genre-modal" data-modal-toggle="genre-modal" class="w-[120px] text-[13px] bg-[#D9D9D9] px-5" type="button">
                                edit
                            </button>

                            <!-- Main modal -->
                            <div id="genre-modal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                                <div class="relative p-4 w-full max-w-2xl max-h-full">
                                    <!-- Modal content -->
                                    <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                        <!-- Modal header -->
                                        <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                                            <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                                                Genres Edit
                                            </h3>
                                            <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="genre-modal">
                                                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                                                </svg>
                                                <span class="sr-only">Close modal</span>
                                            </button>
                                        </div>
                                        <!-- Modal body -->
                                        <div class="p-4 md:p-5 space-y-4">
                                            <form action="{{ route('profile.updateGenrePublisher') }}" method="POST">
                                                @csrf
                                                <ul class=" text-[13px] mt-2 grid grid-cols-3 ">
                                                    @if($genres)
                                                        @foreach($genres as $genre)
                                                            <div>
                                                                <div class="flex items-center gap-4">
                                                                    @php
                                                                        $userGenres = ($user->genres) ? json_decode($user->genres) :  [];
                                                                    @endphp
                                                                    <input type="checkbox" name="genre[]" value="{{ $genre->id }}" {{ in_array($genre->id, $userGenres) ? 'checked' : '' }}><label for="">{{ $genre->name }}</label>
                                                                </div>
                                                            </div>
                                                        @endforeach
                                                    @endif
                                                    <div class=" mt-5 pb-6">
                                                        <button type="submit" class="mx-auto  text-[13px] bg-[#D9D9D9] px-5 ">edit</button>
                                                    </div>
                                                </ul>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            </span>
                        </li>
                        <li class="grid grid-cols-3 border-b-2 border-black items-center"><span class="font-semibold p-2 bg-[#D9D9D9]">Ediing Support</span>
                            <span>
                                @if(isset($user->publisherDetail->editorial_support) && $user->publisherDetail->editorial_support == 1)
                                    Yes
                                @else
                                    No
                                @endif
                            </span>
                            <span class="flex justify-end me-5">



                                <!-- Modal toggle -->
                                <button data-modal-target="gender-modal" data-modal-toggle="gender-modal" class="w-[120px] text-[13px] bg-[#D9D9D9] px-5" type="button">
                                    edit
                                </button>

                                <!-- Main modal -->
                                <div id="gender-modal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                                    <div class="relative p-4 w-full max-w-2xl max-h-full">
                                        <!-- Modal content -->
                                        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                            <!-- Modal header -->
                                            <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                                                <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                                                    Editing Support
                                                </h3>
                                                <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="default-modal">
                                                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                                                    </svg>
                                                    <span class="sr-only">Close modal</span>
                                                </button>
                                            </div>
                                            <!-- Modal body -->
                                            <div class="p-4 md:p-5 space-y-4">
                                                <form action="{{ route('profile.updateEditorial') }}" method="POST">
                                                    @csrf
                                                    <div class="flex flex-col">
                                                        <label for="editorial_support" class="text-sm font-semibold text-gray-900 dark:text-gray-100">Editorial Support</label>
                                                        <select name="editorial_support" id="editorial_support" class="w-full border-2 border-gray-200 rounded-lg mb-2">
                                                            <option value="1" {{ $user->editorial_support == 1 ? 'selected' : '' }}>Yes</option>
                                                            <option value="0" {{ $user->editorial_support == 0 ? 'selected' : '' }}>No</option>
                                                        </select>
                                                    </div>
                                                    <div class="flex items">
                                                        <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Update</button>
                                                        <button data-modal-hide="default-modal" type="button" class="py-2.5 px-5 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">Cancel</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </span>
                        </li>
                        <li class="grid grid-cols-3 border-b-2 border-black items-center"><span class="font-semibold p-2 bg-[#D9D9D9]">Publication Support</span>
                            <span>
                                @if(isset($user->publisherDetail->publication_support) && $user->publisherDetail->publication_support == 1)
                                    Yes
                                @else
                                    No
                                @endif
                            </span>
                            <span class="flex justify-end me-5">
                                <!-- Modal toggle -->
                                <button data-modal-target="publication-modal" data-modal-toggle="publication-modal" class="w-[120px] text-[13px] bg-[#D9D9D9] px-5" type="button">
                                    edit
                                </button>

                                <!-- Main modal -->
                                <div id="publication-modal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                                    <div class="relative p-4 w-full max-w-2xl max-h-full">
                                        <!-- Modal content -->
                                        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                            <!-- Modal header -->
                                            <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                                                <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                                                    Publication Support
                                                </h3>
                                                <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="publication-modal">
                                                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                                                    </svg>
                                                    <span class="sr-only">Close modal</span>
                                                </button>
                                            </div>
                                            <!-- Modal body -->
                                            <div class="p-4 md:p-5 space-y-4">
                                                <form action="{{ route('profile.updatePublication') }}" method="POST">
                                                    @csrf
                                                    <div class="flex flex-col">
                                                        <label for="publication_support" class="text-sm font-semibold text-gray-900 dark:text-gray-100">Publication Support</label>
                                                        <select name="publication_support" id="publication_support" class="w-full border-2 border-gray-200 rounded-lg mb-2">
                                                            <option value="1" {{ $user->publication_support == 1 ? 'selected' : '' }}>Yes</option>
                                                            <option value="0" {{ $user->publication_support == 0 ? 'selected' : '' }}>No</option>
                                                        </select>
                                                    </div>
                                                    <div class="flex items">
                                                        <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Update</button>
                                                        <button data-modal-hide="default-modal" type="button" class="py-2.5 px-5 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">Cancel</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </span>
                        </li>
                        <li class="grid grid-cols-3 border-b-2 border-black items-center"><span class="font-semibold p-2 bg-[#D9D9D9]">Expenses</span>
                            <span>
                                From {{ $user->publisherDetail->cost ?? 0 }} yen
                            </span>
                            <span class="flex justify-end me-5">
                                <!-- Modal toggle -->
                                <button data-modal-target="cost-modal" data-modal-toggle="cost-modal" class="w-[120px] text-[13px] bg-[#D9D9D9] px-5" type="button">
                                    edit
                                </button>

                                <!-- Main modal -->
                                <div id="cost-modal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                                    <div class="relative p-4 w-full max-w-2xl max-h-full">
                                        <!-- Modal content -->
                                        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                            <!-- Modal header -->
                                            <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                                                <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                                                    Expenses
                                                </h3>
                                                <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="cost-modal">
                                                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                                                    </svg>
                                                    <span class="sr-only">Close modal</span>
                                                </button>
                                            </div>
                                            <!-- Modal body -->
                                            <div class="p-4 md:p-5 space-y-4">
                                                <form action="{{ route('profile.updateCost') }}" method="POST">
                                                    @csrf
                                                    <div class="flex flex-col">
                                                        <label for="cost" class="text-sm font-semibold text-gray-900 dark:text-gray-100">Cost</label>
                                                        <input type="number" name="cost" id="cost" class="w-full border-2 border-gray-200 rounded-lg mb-2" value="{{ $user->publisherDetail->cost ?? 0 }}">
                                                    </div>
                                                    <div class="flex items">
                                                        <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Update</button>
                                                        <button data-modal-hide="cost-modal" type="button" class="py-2.5 px-5 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">Cancel</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </span>
                        </li>
                        <li class="grid grid-cols-3 border-b-2 border-black items-center"><span class="font-semibold p-2 bg-[#D9D9D9]">Number of copies</span>
                            <span>
                                @if($user->publisherDetail->circulation > 0)
                                    {{ $user->publisherDetail->circulation ?? 0 }} copies or more
                                @endif
                            </span>
                            <span class="flex justify-end me-5">
                                <!-- Modal toggle -->
                                <button data-modal-target="circulation-modal" data-modal-toggle="circulation-modal" class="w-[120px] text-[13px] bg-[#D9D9D9] px-5" type="button">
                                    edit
                                </button>

                                <!-- Main modal -->
                                <div id="circulation-modal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                                    <div class="relative p-4 w-full max-w-2xl max-h-full">
                                        <!-- Modal content -->
                                        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                            <!-- Modal header -->
                                            <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                                                <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                                                    Circulation
                                                </h3>
                                                <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="circulation-modal">
                                                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                                                    </svg>
                                                    <span class="sr-only">Close modal</span>
                                                </button>
                                            </div>
                                            <!-- Modal body -->
                                            <div class="p-4 md:p-5 space-y-4">
                                                <form action="{{ route('profile.updateCirculation') }}" method="POST">
                                                    @csrf
                                                    <div class="flex flex-col">
                                                        <label for="circulation" class="text-sm font-semibold text-gray-900 dark:text-gray-100">Circulation</label>
                                                        <input type="number" name="circulation" id="circulation" class="w-full border-2 border-gray-200 rounded-lg mb-2" value="{{ $user->publisherDetail->circulation ?? 0 }}">
                                                    </div>
                                                    <div class="flex items">
                                                        <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Update</button>
                                                        <button data-modal-hide="circulation-modal" type="button" class="py-2.5 px-5 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">Cancel</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </span>
                        </li>
                        <li class="grid grid-cols-3 border-b-2 border-black items-center"><span class="font-semibold p-2 bg-[#D9D9D9]">Line of business</span>
                            <span style="line-height:16px;">
                                    {{ $user->publisherDetail->business_activities ?? '' }}
                            </span>
                            <span class="flex justify-end me-5">
                                <!-- Modal toggle -->
                                <button data-modal-target="business-modal" data-modal-toggle="business-modal" class="w-[120px] text-[13px] bg-[#D9D9D9] px-5" type="button">
                                    edit
                                </button>

                                <!-- Main modal -->
                                <div id="business-modal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                                    <div class="relative p-4 w-full max-w-2xl max-h-full">
                                        <!-- Modal content -->
                                        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                            <!-- Modal header -->
                                            <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                                                <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                                                    Line of Business
                                                </h3>
                                                <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="business-modal">
                                                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                                                    </svg>
                                                    <span class="sr-only">Close modal</span>
                                                </button>
                                            </div>
                                            <!-- Modal body -->
                                            <div class="p-4 md:p-5 space-y-4">
                                                <form action="{{ route('profile.updateBusiness') }}" method="POST">
                                                    @csrf
                                                    <div class="flex flex-col">
                                                        <label for="business_activities" class="text-sm font-semibold text-gray-900 dark:text-gray-100">Business Activities</label>
                                                        <textarea name="business_activities" id="business_activities" class="w-full border-2 border-gray-200 rounded-lg mb-2">{{ $user->publisherDetail->business_activities ?? '' }}</textarea>
                                                    </div>
                                                    <div class="flex items">
                                                        <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Update</button>
                                                        <button data-modal-hide="business-modal" type="button" class="py-2.5 px-5 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">Cancel</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </span>
                        </li>
                        <li class="grid grid-cols-3 border-b-2 border-black items-center"><span class="font-semibold p-2 bg-[#D9D9D9]">Capital</span>
                            <span style="line-height:16px;">
                                    {{ $user->publisherDetail->capital ?? '' }}
                            </span>
                            <span class="flex justify-end me-5">
                                <!-- Modal toggle -->
                                <button data-modal-target="capital-modal" data-modal-toggle="capital-modal" class="w-[120px] text-[13px] bg-[#D9D9D9] px-5" type="button">
                                    edit
                                </button>

                                <!-- Main modal -->
                                <div id="capital-modal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                                    <div class="relative p-4 w-full max-w-2xl max-h-full">
                                        <!-- Modal content -->
                                        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                            <!-- Modal header -->
                                            <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                                                <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                                                    Capital
                                                </h3>
                                                <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="capital-modal">
                                                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                                                    </svg>
                                                    <span class="sr-only">Close modal</span>
                                                </button>
                                            </div>
                                            <!-- Modal body -->
                                            <div class="p-4 md:p-5 space-y-4">
                                                <form action="{{ route('profile.updateCapital') }}" method="POST">
                                                    @csrf
                                                    <div class="flex flex-col">
                                                        <label for="capital" class="text-sm font-semibold text-gray-900 dark:text-gray-100">Capital</label>
                                                        <input type="text" name="capital" id="capital" class="w-full border-2 border-gray-200 rounded-lg mb-2" value="{{ $user->publisherDetail->capital ?? '' }}">
                                                    </div>
                                                    <div class="flex items">
                                                        <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Update</button>
                                                        <button data-modal-hide="capital-modal" type="button" class="py-2.5 px-5 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">Cancel</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </span>
                        </li>
                        <li class="grid grid-cols-3 border-b-2 border-black items-center"><span class="font-semibold p-2 bg-[#D9D9D9]">Area</span>
                            <span style="line-height:16px;">
                                    {{ $user->area ?? '' }}
                            </span>
                            <span class="flex justify-end me-5">
                                <!-- Modal toggle -->
                                <button data-modal-target="area-modal" data-modal-toggle="area-modal" class="w-[120px] text-[13px] bg-[#D9D9D9] px-5" type="button">
                                    edit
                                </button>

                                <!-- Main modal -->
                                <div id="area-modal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                                    <div class="relative p-4 w-full max-w-2xl max-h-full">
                                        <!-- Modal content -->
                                        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                            <!-- Modal header -->
                                            <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                                                <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                                                    Area
                                                </h3>
                                                <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="area-modal">
                                                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                                                    </svg>
                                                    <span class="sr-only">Close modal</span>
                                                </button>
                                            </div>
                                            <!-- Modal body -->
                                            <div class="p-4 md:p-5 space-y-4">
                                                <form action="{{ route('profile.updateArea') }}" method="POST">
                                                    @csrf
                                                    <div class="flex flex-col">
                                                        <label for="area" class="text-sm font-semibold text-gray-900 dark:text-gray-100">Area</label>
                                                        @php
                                                            $suppot_area = getSupportAreas();
                                                        @endphp
                                                        <select name="area" id="area" class="w-full border-2 border-gray-200 rounded-lg mb-2">
                                                            <option value="">Select Area</option>
                                                            @foreach($suppot_area as $area)
                                                                <option value="{{ $area->name }}" {{ $user->area == $area->name ? 'selected' : '' }}>{{ $area->name }}</option>
                                                            @endforeach

                                                        </select>
                                                    </div>
                                                    <div class="flex items">
                                                        <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Update</button>
                                                        <button data-modal-hide="area-modal" type="button" class="py-2.5 px-5 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">Cancel</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </span>
                        </li>
                        <li class="grid grid-cols-3 border-b-2 border-black items-center"><span class="font-semibold p-2 bg-[#D9D9D9]">Established</span>
                            <span style="line-height:16px;">
                                    {{ $user->publisherDetail->establishment_date ?? '' }}
                            </span>
                            <span class="flex justify-end me-5">
                                <!-- Modal toggle -->
                                <button data-modal-target="established-modal" data-modal-toggle="established-modal" class="w-[120px] text-[13px] bg-[#D9D9D9] px-5" type="button">
                                    edit
                                </button>

                                <!-- Main modal -->
                                <div id="established-modal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                                    <div class="relative p-4 w-full max-w-2xl max-h-full">
                                        <!-- Modal content -->
                                        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                            <!-- Modal header -->
                                            <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                                                <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                                                    Established Date
                                                </h3>
                                                <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="established-modal">
                                                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                                                    </svg>
                                                    <span class="sr-only">Close modal</span>
                                                </button>
                                            </div>
                                            <!-- Modal body -->
                                            <div class="p-4 md:p-5 space-y-4">
                                                <form action="{{ route('profile.updateEstablished') }}" method="POST">
                                                    @csrf
                                                    <div class="flex flex-col">
                                                        <label for="establishment_date" class="text-sm font-semibold text-gray-900 dark:text-gray-100">Establishment Date</label>
                                                        <input type="text" name="establishment_date" id="establishment_date" class="w-full border-2 border-gray-200 rounded-lg mb-2" value="{{ $user->publisherDetail->establishment_date ?? '' }}">
                                                    </div>
                                                    <div class="flex items">
                                                        <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Update</button>
                                                        <button data-modal-hide="established-modal" type="button" class="py-2.5 px-5 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">Cancel</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </span>
                        </li>
                        <li class="grid grid-cols-3 border-b-2 border-black items-center"><span class="font-semibold p-2 bg-[#D9D9D9]">Representative</span>
                            <span style="line-height:16px;">
                                    {{ $user->publisherDetail->representative ?? '' }}
                            </span>
                            <span class="flex justify-end me-5">
                                <!-- Modal toggle -->
                                <button data-modal-target="representative-modal" data-modal-toggle="representative-modal" class="w-[120px] text-[13px] bg-[#D9D9D9] px-5" type="button">
                                    edit
                                </button>

                                <!-- Main modal -->
                                <div id="representative-modal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                                    <div class="relative p-4 w-full max-w-2xl max-h-full">
                                        <!-- Modal content -->
                                        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                            <!-- Modal header -->
                                            <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                                                <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                                                    Representative
                                                </h3>
                                                <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="representative-modal">
                                                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                                                    </svg>
                                                    <span class="sr-only">Close modal</span>
                                                </button>
                                            </div>
                                            <!-- Modal body -->
                                            <div class="p-4 md:p-5 space-y-4">
                                                <form action="{{ route('profile.updateRepresentative') }}" method="POST">
                                                    @csrf
                                                    <div class="flex flex-col">
                                                        <label for="representative" class="text-sm font-semibold text-gray-900 dark:text-gray-100">Representative</label>
                                                        <input type="text" name="representative" id="representative" class="w-full border-2 border-gray-200 rounded-lg mb-2" value="{{ $user->publisherDetail->representative ?? '' }}">
                                                    </div>
                                                    <div class="flex items">
                                                        <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Update</button>
                                                        <button data-modal-hide="established-modal" type="button" class="py-2.5 px-5 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">Cancel</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </span>
                        </li>
                        <li class="grid grid-cols-3 border-b-2 border-black items-center bg-[#D9D9D9]"><span class="font-semibold p-2 bg-[#D9D9D9]">History of the company</span>
                            <span style="line-height:16px;" class="bg-[#ffffff] w-[430px] text-[12px]">
                                @if(isset($user->publisherDetail->company_history))
                                    {!! nl2br($user->publisherDetail->company_history) ?? '' !!}
                                @endif
                                    <span class="flex justify-end me-5 bg-[#ffffff] mb-3">
                                        <!-- Modal toggle -->
                                        <button data-modal-target="history-modal" data-modal-toggle="history-modal" class="w-[120px] text-[13px] bg-[#D9D9D9] px-5 py-2" type="button">
                                            edit
                                        </button>

                                        <!-- Main modal -->
                                        <div id="history-modal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                                            <div class="relative p-4 w-full max-w-2xl max-h-full">
                                                <!-- Modal content -->
                                                <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                                    <!-- Modal header -->
                                                    <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                                                        <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                                                            Company History
                                                        </h3>
                                                        <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="history-modal">
                                                            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                                                            </svg>
                                                            <span class="sr-only">Close modal</span>
                                                        </button>
                                                    </div>
                                                    <!-- Modal body -->
                                                    <div class="p-4 md:p-5 space-y-4">
                                                        <form action="{{ route('profile.updateHistory') }}" method="POST">
                                                            @csrf
                                                            <div class="flex flex-col">
                                                                <label for="company_history" class="text-sm font-semibold text-gray-900 dark:text-gray-100">Company History</label>
                                                                <textarea name="company_history" id="company_history" class="w-full border-2 border-gray-200 rounded-lg mb-2">{{ $user->publisherDetail->company_history ?? '' }}</textarea>
                                                            </div>
                                                            <div class="flex items">
                                                                <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Update</button>
                                                                <button data-modal-hide="history-modal" type="button" class="py-2.5 px-5 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">Cancel</button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </span>
                            </span>
                        </li>
                        <li class="grid grid-cols-3 border-b-2 border-black items-center bg-[#D9D9D9]"><span class="font-semibold p-2 bg-[#D9D9D9]">Representative Magazine</span>
                            <span style="line-height:16px;" class="bg-[#ffffff] w-[430px] text-[12px]">
                                {{ $user->publisherDetail->representative_magazine ?? '' }}
                                    <span class="flex justify-end me-5 bg-[#ffffff] mb-3">
                                        <!-- Modal toggle -->
                                        <button data-modal-target="magazine-modal" data-modal-toggle="magazine-modal" class="w-[120px] text-[13px] bg-[#D9D9D9] px-5 py-2" type="button">
                                            edit
                                        </button>

                                        <!-- Main modal -->
                                        <div id="magazine-modal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                                            <div class="relative p-4 w-full max-w-2xl max-h-full">
                                                <!-- Modal content -->
                                                <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                                    <!-- Modal header -->
                                                    <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                                                        <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                                                            Representative Magazine
                                                        </h3>
                                                        <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="magazine-modal">
                                                            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                                                            </svg>
                                                            <span class="sr-only">Close modal</span>
                                                        </button>
                                                    </div>
                                                    <!-- Modal body -->
                                                    <div class="p-4 md:p-5 space-y-4">
                                                        <form action="{{ route('profile.updateMagazine') }}" method="POST">
                                                            @csrf
                                                            <div class="flex flex-col">
                                                                <label for="representative_magazine" class="text-sm font-semibold text-gray-900 dark:text-gray-100">Representative Magazine</label>
                                                                <input type="text" name="representative_magazine" id="representative_magazine" class="w-full border-2 border-gray-200 rounded-lg mb-2" value="{{ $user->publisherDetail->representative_magazine ?? '' }}">
                                                            </div>
                                                            <div class="flex items">
                                                                <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Update</button>
                                                                <button data-modal-hide="magazine-modal" type="button" class="py-2.5 px-5 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">Cancel</button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </span>
                            </span>
                        </li>

                    </ul>
                </div>
            </div>
        </div>
    </div>

</div>
</div>
@endsection