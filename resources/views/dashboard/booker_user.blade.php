@extends('layouts.dashboard_layout')
@section('content')
    <div class="relative overflow-x-auto shadow-md sm:rounded-lg grid items-center h-full">
        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        user name
                    </th>
                    <th scope="col" class="px-6 py-3  dark:bg-gray-800">
                        email
                    </th>
                    <th scope="col" class="px-6 py-3">
                        gender
                    </th>
                    <th scope="col" class="px-6 py-3">
                        age
                    </th>
                    <th scope="col" class="px-6 py-3">
                        regestration date
                    </th>
                    <th scope="col" class="px-6 py-3">
                        status
                    </th>
                </tr>
            </thead>
            <tbody>
                @if($bookers->count() > 0)
                    @foreach ($bookers as $booker)
                        <tr class="border-b border-gray-200 dark:border-gray-700">
                            <td class="px-6 py-4">
                                {{ $booker->name }}
                            </td>
                            <td class="px-6 py-4 bg-gray-50 dark:bg-gray-800">
                                {{ $booker->email }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $booker->gender ?? '' }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $booker->age ?? '' }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $booker->created_at->format('d/m/Y') }}
                            </td>
                            <td class="px-6 py-4">
                                <form action="{{ route('booker_user_status') }}" method="post">
                                    @csrf
                                    <label class="relative inline-flex items-center cursor-pointer">
                                        <input type="checkbox" value="{{ $booker->status }}" class="sr-only peer" @if($booker->status == 1) checked @endif onchange="this.form.submit();">
                                        <input type="hidden" name="booker_id" value="{{ $booker->id }}">
                                        <input type="hidden" name="status" value="{{ $booker->status }}">
                                        <div class="w-11 h-6 bg-red-600 rounded-full peer peer-focus:ring-4 peer-focus:ring-blue-300 dark:peer-focus:ring-blue-800 dark:bg-gray-700 peer-checked:after:translate-x-full rtl:peer-checked:after:-translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-0.5 after:start-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-green-400">
                                        </div>
                                    </form>
                                </label>
                            </td>
                        </tr>
                    @endforeach
                @endif

            </tbody>
        </table>
    </div>
@endsection
