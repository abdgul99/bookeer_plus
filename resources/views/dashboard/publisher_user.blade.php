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
                <tr class="border-b border-gray-200 dark:border-gray-700">
                    <td class="px-6 py-4">
                        company name com
                    </td>
                    <td class="px-6 py-4 bg-gray-50 dark:bg-gray-800">
                        person name person
                    </td>
                    <td class="px-6 py-4">
                        080-0000-0000
                    </td>
                    <td class="px-6 py-4">
                        070-1111-0000
                    </td>
                    <td class="px-6 py-4">
                        11/24/2023
                    </td>
                    <td class="px-6 py-4">
                        〒100-0001
                        1-1,chiyoda,tokyo,japan
                    </td>
                    <td class="px-6 py-4">
                        <label class="relative inline-flex items-center cursor-pointer">
                            <input type="checkbox" value="" class="sr-only peer" checked>
                            <div
                                class="w-11 h-6 bg-red-600 rounded-full peer peer-focus:ring-4 peer-focus:ring-blue-300 dark:peer-focus:ring-blue-800 dark:bg-gray-700 peer-checked:after:translate-x-full rtl:peer-checked:after:-translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-0.5 after:start-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-green-400">
                            </div>
                        </label>
                    </td>
                </tr>
                <tr class="border-b border-gray-200 dark:border-gray-700">
                    <td class="px-6 py-4">
                        company name com
                    </td>
                    <td class="px-6 py-4 bg-gray-50 dark:bg-gray-800">
                        person name person
                    </td>
                    <td class="px-6 py-4">
                        080-0000-0000
                    </td>
                    <td class="px-6 py-4">
                        070-1111-0000
                    </td>
                    <td class="px-6 py-4">
                        11/24/2023
                    </td>
                    <td class="px-6 py-4">
                        〒100-0001
                        1-1,chiyoda,tokyo,japan
                    </td>
                    <td class="px-6 py-4">
                        <label class="relative inline-flex items-center cursor-pointer">
                            <input type="checkbox" value="" class="sr-only peer" checked>
                            <div
                                class="w-11 h-6 bg-red-600 rounded-full peer peer-focus:ring-4 peer-focus:ring-blue-300 dark:peer-focus:ring-blue-800 dark:bg-gray-700 peer-checked:after:translate-x-full rtl:peer-checked:after:-translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-0.5 after:start-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-green-400">
                            </div>
                        </label>
                    </td>
                </tr>
                <tr class="border-b border-gray-200 dark:border-gray-700">
                    <td class="px-6 py-4">
                        company name com
                    </td>
                    <td class="px-6 py-4 bg-gray-50 dark:bg-gray-800">
                        person name person
                    </td>
                    <td class="px-6 py-4">
                        080-0000-0000
                    </td>
                    <td class="px-6 py-4">
                        070-1111-0000
                    </td>
                    <td class="px-6 py-4">
                        11/24/2023
                    </td>
                    <td class="px-6 py-4">
                        〒100-0001
                        1-1,chiyoda,tokyo,japan
                    </td>
                    <td class="px-6 py-4">
                        <label class="relative inline-flex items-center cursor-pointer">
                            <input type="checkbox" value="" class="sr-only peer" checked>
                            <div
                                class="w-11 h-6 bg-red-600 rounded-full peer peer-focus:ring-4 peer-focus:ring-blue-300 dark:peer-focus:ring-blue-800 dark:bg-gray-700 peer-checked:after:translate-x-full rtl:peer-checked:after:-translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-0.5 after:start-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-green-400">
                            </div>
                        </label>
                    </td>
                </tr>
                <tr class="border-b border-gray-200 dark:border-gray-700">
                    <td class="px-6 py-4">
                        company name com
                    </td>
                    <td class="px-6 py-4 bg-gray-50 dark:bg-gray-800">
                        person name person
                    </td>
                    <td class="px-6 py-4">
                        080-0000-0000
                    </td>
                    <td class="px-6 py-4">
                        070-1111-0000
                    </td>
                    <td class="px-6 py-4">
                        11/24/2023
                    </td>
                    <td class="px-6 py-4">
                        〒100-0001
                        1-1,chiyoda,tokyo,japan
                    </td>
                    <td class="px-6 py-4">
                        <label class="relative inline-flex items-center cursor-pointer">
                            <input type="checkbox" value="" class="sr-only peer" checked>
                            <div
                                class="w-11 h-6 bg-red-600 rounded-full peer peer-focus:ring-4 peer-focus:ring-blue-300 dark:peer-focus:ring-blue-800 dark:bg-gray-700 peer-checked:after:translate-x-full rtl:peer-checked:after:-translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-0.5 after:start-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-green-400">
                            </div>
                        </label>
                    </td>
                </tr>



            </tbody>
        </table>
        <div class="grid justify-center">
            <button class="text-2xl font-semibold text-center px-5 p-3 rounded bg-[#CA8EEE] text-white my-5">+ publisher
                account</button>
        </div>
    </div>
@endsection
