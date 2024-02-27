@extends('layouts.dashboard_layout')
@section('content')
    <div class="relative overflow-x-auto shadow-md sm:rounded-lg grid items-center h-full">
        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        company name
                    </th>
                    <th scope="col" class="px-6 py-3  dark:bg-gray-800">
                        Person in charge name
                    </th>
                    <th scope="col" class="px-6 py-3">
                        telephone
                    </th>
                    <th scope="col" class="px-6 py-3">
                        emergency
                        contact
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Registration date
                    </th>
                    <th scope="col" class="px-6 py-3">
                        address
                    </th>
                    <th scope="col" class="px-6 py-3">
                        subscription
                        status
                    </th>
                </tr>
            </thead>
            <tbody>
                @if($publishers->count() > 0)
                    @foreach ($publishers as $publisher)
                        <tr class="border-b border-gray-200 dark:border-gray-700">
                            <td class="px-6 py-4">
                                {{ $publisher->publisherDetail->company_name ?? '' }}
                            </td>
                            <td class="px-6 py-4 bg-gray-50 dark:bg-gray-800">
                                {{ $publisher->publisherDetail->person_incharge ?? '' }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $publisher->publisherDetail->phone_number ?? '' }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $publisher->publisherDetail->emergency_contact ?? '' }}
                            </td>
                            <td class="px-6 py-4">
                                {{ ($publisher->publisherDetail != null) ? ($publisher->publisherDetail->register_date !=null) ? $publisher->publisherDetail->register_date->format('d/m/Y'): '' : ''}}
                            </td>
                            <td class="px-6 py-4">
                                {{ $publisher->area ?? '' }}
                            </td>
                            <td class="px-6 py-4">
                                <form action="{{ route('publisher_user_status') }}" method="post">
                                    @csrf
                                    <label class="relative inline-flex items-center cursor-pointer">
                                        <input type="checkbox" value="{{ $publisher->status }}" class="sr-only peer" @if($publisher->status == 1) checked @endif onchange="this.form.submit();">
                                        <input type="hidden" name="publisher_id" value="{{ $publisher->id }}">
                                        <input type="hidden" name="status" value="{{ $publisher->status }}">
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
        <div class="grid justify-center">
            <a href="{{ route('add_publisher') }}" class="text-2xl font-semibold text-center px-5 p-3 rounded bg-[#CA8EEE] text-white my-5">+ publisher
                account</a>
        </div>
    </div>
@endsection
