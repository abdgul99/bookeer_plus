@extends('layouts.dashboard_layout')
@section('content')
<div class="relative overflow-x-auto shadow-md sm:rounded-lg grid items-center h-full">
    <div class="flex justify-between items-center">
        <h1 class="text-2xl font-semibold text-gray-700 dark:text-gray-200">FAQs</h1>
        <a href="{{ route('faq.create') }}" class="px-4 py-2 bg-blue-600 text-white rounded-md hover:bg-blue-500">Add New</a>
    </div>
    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">
                    Question
                </th>
                <th scope="col" class="px-6 py-3  dark:bg-gray-800">
                    Answer
                </th>

                <th scope="col" class="px-6 py-3">
                    Action
                </th>
            </tr>
        </thead>
        <tbody>
            @if($faqs->count() > 0)
            @foreach ($faqs as $faq)
            <tr class="border-b border-gray-200 dark:border-gray-700">
                <td class="px-6 py-4">
                    {{ $faq->question ?? '' }}
                </td>
                <td class="px-6 py-4 bg-gray-50 dark:bg-gray-800">
                    {{ $faq->answer ?? '' }}
                </td>
                <td class="px-6 py-4">
                    <a href="{{ route('faq.edit', $faq->id) }}" class="text-blue-600 hover:underline">Edit</a>
                    <form action="{{ route('faq.destroy', $faq->id) }}" method="POST" class="inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="text-red-600 hover:underline">Delete</button>
                    </form>

                </td>
            </tr>
            @endforeach
            @endif

        </tbody>
    </table>
</div>
@endsection
