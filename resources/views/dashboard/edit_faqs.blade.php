@extends('layouts.dashboard_layout')

@section('content')
    <div class="max-w-xl mx-auto grid h-full items-center p-8 lg:p-0">
        <form action="{{ route('faq.update') }}" method="POST" class="space-y-5 w-full lg:w-96 mx-auto">
            @csrf
            <input type="hidden" name="id" value="{{ $faq->id }}">
            <h2 class="text-center font-semibold text-2xl">Add FAQ</h2>
            {{-- display error and success --}}
            @if (session('error'))
                <div class="text-red-500 text-center">
                    {{ session('error') }}
                </div>
            @endif
            @if (session('success'))
                <div class="text-green-500 text-center">
                    {{ session('success') }}
                </div>
            @endif
            <div class="my-5">
                <input type="text" placeholder="Question" name="question"
                    class="mb-3border-0 border-b-2 text-lg w-full text-black focus:outline-none focus:ring-0 focus:border-b-black" value="{{ $faq->question ?? '' }}">
                <textarea name="answer" id="" cols="30" rows="10"
                    class="border-0 border-b-2 focus:outline-none focus:ring-0 focus:border-b-black text-lg w-full text-black"
                    placeholder="Answer">{{ $faq->answer ?? '' }}</textarea>
            </div>
            <div class="grid justify-center">
                <button type="submit" class="font-semi-bold text-white p-2 px-6 rounded  bg-[#CA8EEE]">Edit</button>
            </div>
        </form>
    </div>
@endsection
