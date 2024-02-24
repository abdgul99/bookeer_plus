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
                        <form action="{{ route('profile.updateImage') }}" method="POST" enctype="multipart/form-data">
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
                        {{-- <button class="mx-auto  text-[13px] bg-[#D9D9D9] px-5 ">edit</button> --}}


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
                    <form action="{{ route('profile.updateName') }}" method="POST">
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
                        {{-- <button class="mx-auto  text-[13px] bg-[#D9D9D9] px-5 ">edit</button> --}}


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
                    <form action="{{ route('profile.updateComment') }}" method="POST">
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
                        <div class="shadow-2xl  border p-4 bg-white">
                            <ul class=" text-[16px] mt-2">
                                <li class="grid grid-cols-3 border-b-2 border-black p-1 items-center"><span>Age</span>
                                    <span>{{ $user->age ?? '' }}</span> <span class="flex justify-end">


<!-- Modal toggle -->
<button data-modal-target="age-modal" data-modal-toggle="age-modal" class="w-[120px] text-[13px] bg-[#D9D9D9] px-5" type="button">
    edit
  </button>

  <!-- Main modal -->
  <div id="age-modal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
      <div class="relative p-4 w-full max-w-2xl max-h-full">
          <!-- Modal content -->
          <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
              <!-- Modal header -->
              <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                  <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                      Age Edit
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
                  <form action="{{ route('profile.updateAge') }}" method="POST">
                      @csrf
                      <div class="flex flex-col">
                          <label for="age" class="text-sm font-semibold text-gray-900 dark:text-gray-100">Age</label>
                          <input type="text" name="age" id="age" class="w-full border-2 border-gray-200 rounded-lg mb-2" value="{{ $user->age }}">
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

                                    </span>
                                </li>
                                <li class="grid grid-cols-3 border-b-2 border-black p-1 items-center"><span>Gender</span>
                                    <span>{{ $user->gender ?? '' }}</span> <span class="flex justify-end">



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
                      Gender
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
                  <form action="{{ route('profile.updateGender') }}" method="POST">
                      @csrf
                      <div class="flex flex-col">
                        <select name="gender">
                            <option value="">Select Gender</option>
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
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
                                <li class="grid grid-cols-3 border-b-2 border-black p-1 items-center"><span>Job</span>
                                    <span>{{ $user->job ?? '' }}</span> <span class="flex justify-end">



<!-- Modal toggle -->
<button data-modal-target="job-modal" data-modal-toggle="job-modal" class="w-[120px] text-[13px] bg-[#D9D9D9] px-5" type="button">
    edit
  </button>

  <!-- Main modal -->
  <div id="job-modal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
      <div class="relative p-4 w-full max-w-2xl max-h-full">
          <!-- Modal content -->
          <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
              <!-- Modal header -->
              <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                  <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                      Job
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
                    <form action="{{ route('profile.updateJob') }}" method="POST">
                        @csrf
                        <div class="flex flex-col">
                            <label for="job" class="text-sm font-semibold text-gray-900 dark:text-gray-100">Job</label>
                            <input type="text" name="job" id="job" class="w-full border-2 border-gray-200 rounded-lg mb-2" value="{{ $user->job }}">
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
                                <li class="grid grid-cols-3 border-b-2 border-black p-1 items-center"><span>Location</span>
                                    <span>{{ $user->area ?? '' }}</span> <span class="flex justify-end">


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
                      Location
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
                  <form action="{{ route('profile.updateArea') }}" method="POST">
                      @csrf
                      <div class="flex flex-col">
                          <label for="area" class="text-sm font-semibold text-gray-900 dark:text-gray-100">Location</label>
                          <input type="text" name="area" id="area" class="w-full border-2 border-gray-200 rounded-lg mb-2" value="{{ $user->area }}">
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
                                <li class="grid grid-cols-3 border-b-2 border-black p-1 items-center"><span>Blog</span>
                                    <span>{{ $user->website ?? '' }}</span> <span class="flex justify-end">


<!-- Modal toggle -->
<button data-modal-target="website-modal" data-modal-toggle="website-modal" class="w-[120px] text-[13px] bg-[#D9D9D9] px-5 " type="button">
    edit
  </button>

  <!-- Main modal -->
  <div id="website-modal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
      <div class="relative p-4 w-full max-w-2xl max-h-full">
          <!-- Modal content -->
          <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
              <!-- Modal header -->
              <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                  <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                     Website Url
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
                  <form action="{{ route('profile.updateWebsite') }}" method="POST">
                      @csrf
                      <div class="flex flex-col">
                          <label for="website" class="text-sm font-semibold text-gray-900 dark:text-gray-100">Website Url</label>
                          <input type="text" name="website" id="website" class="w-full border-2 border-gray-200 rounded-lg mb-2" value="{{ $user->website }}">
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
                                <li class="grid grid-cols-3 border-b-2 border-black p-1 items-center"><span>SNS</span>
                                    <span>{{ $user->sns ?? '' }}</span> <span class="flex justify-end">


<!-- Modal toggle -->
<button data-modal-target="sns-modal" data-modal-toggle="sns-modal" class="w-[120px] text-[13px] bg-[#D9D9D9] px-5" type="button">
    edit
  </button>

  <!-- Main modal -->
  <div id="sns-modal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
      <div class="relative p-4 w-full max-w-2xl max-h-full">
          <!-- Modal content -->
          <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
              <!-- Modal header -->
              <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                  <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                      SNS Number
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
                  <form action="{{ route('profile.updateSns') }}" method="POST">
                      @csrf
                      <div class="flex flex-col">
                          <label for="sns" class="text-sm font-semibold text-gray-900 dark:text-gray-100">SNS Number</label>
                          <input type="text" name="sns" id="sns" class="w-full border-2 border-gray-200 rounded-lg mb-2" value="{{ $user->sns }}">
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
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="relative mt-8">
                    <!-- <img src="{{ asset('assets/rectangle.png') }}" alt=""> -->
                    <div>
                        <label for=""
                            class="bg-black text-white py-2 ps-8 pe-12 text-sm [clip-path:polygon(0_0,75%_0,100%_100%,0%_100%)]
                        ">Genre</label>
                    </div>
                    <div class="shadow-2xl  border p-4 bg-white">
                        <form action="{{ route('profile.updateGenre') }}" method="POST">
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
                    <button
                        class="p-3 px-5 float-right mt-12 text-[18px] text-white flex items-center justify-between border-b-2 w-full bg-[#F5821F] lg:w-[482px] border-b-[F5821F] translate-x-8">
                        <img src="{{ asset('assets/txt.png') }}" alt="">
                        <span>Favorite Publishers</span>
                        <img src="{{ asset('assets/vector.png') }}" alt="">
                    </button>
                </div>
            </div>

        </div>
    </div>
@endsection
