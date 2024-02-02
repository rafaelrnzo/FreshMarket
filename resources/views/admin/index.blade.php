@extends('layouts.admin')
@section('content')
    <div class="px-12 p-16  ">

        <h1 class="text-3xl font-semibold text-white">Admin</h1>
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-4 mt-4 shadow-sm">
            <div class="w-full">

                <a href="#"
                    class="block max-w-full p-6 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Total Transactions</h5>
                    <p class="font-normal text-gray-700 dark:text-gray-400">
                        {{ count($transactions) }}</p>
                </a>
            </div>
            <div class="w-full">

                <a href="#"
                    class="block max-w-full p-6 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Total Products</h5>
                    <p class="font-normal text-gray-700 dark:text-gray-400">
                        {{ count($users) }}</p>
                </a>
            </div>
        </div>

        <div class="h-auto w-full">
            <p class="text-2xl font-semibold mt-4 mb-4 text-white">Transaction</p>
            <div class="relative overflow-x-auto">
                <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th scope="col" class="px-6 py-3">
                            </th>
                            <th scope="col" class="px-6 py-3">
                                User
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Product
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Transaction Date
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($transactions as $key => $transaction)
                            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                <th scope="row" class="px-6 py-4 font-medium text-white whitespace-nowrap ">
                                    {{ $key + 1 }}
                                </th>
                                <td class="px-6 py-4">
                                    {{ $transaction->user->name }}

                                </td>
                                <td class="px-6 py-4">
                                    {{ $transaction->product->name }}

                                </td>
                                <td class="px-6 py-4">
                                    {{ $transaction->created_at }}
                                </td>
                            </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>
        </div>

        <div class="relative overflow-x-auto">
            <p class="text-2xl font-semibold my-4 text-white">Users </p>

            <table class="w-full text-sm text-left text-gray-500 ">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                        </th>
                        <th scope="col" class="px-6 py-3">
                            User
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Role
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $key => $user)
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                         <th scope="row" class="px-6 py-4 font-medium text-white whitespace-nowrap ">
                                {{ $key + 1 }}
                            </th>
                            <td class="px-6 py-4">
                                {{ $user->name }}

                            </td>
                            <td class="px-6 py-4">
                                {{ $user->role->name }}

                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
