@extends('layouts.admin')
@section('content')
    <div class="px-12 pt-16">

        <div class="flex justify-between items-center pb-6">
            <h1 class="text-3xl text-white font-semibold">Users</h1>

            <a href="{{ route('admin.adduser') }}"
                class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">
                Add User</a>
        </div>

        <div class="relative overflow-x-auto">
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
                        <th scope="col" class="px-6 py-3">
                            Action
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
                            <td class="flex gap-2 px-6 py-4">
                                <form action="{{ route('admin.userdelete', $user->id) }}" method="post">
                                    @csrf
                                    @method('delete')
                                    <button type="submit" class="btn btn-error text-white"
                                        onclick="return confirm('Yakin Mau Delete?')">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            fill="currentColor" class="bi bi-trash-fill" viewBox="0 0 16 16">
                                            <path
                                                d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5M8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5m3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0" />
                                        </svg>
                                    </button>
                                </form>
                                <a class="btn btn-warning text-white" href="{{ route('admin.edituserindex', $user->id) }}">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                        fill="currentColor" class="bi bi-pen-fill" viewBox="0 0 16 16">
                                        <path
                                            d="m13.498.795.149-.149a1.207 1.207 0 1 1 1.707 1.708l-.149.148a1.5 1.5 0 0 1-.059 2.059L4.854 14.854a.5.5 0 0 1-.233.131l-4 1a.5.5 0 0 1-.606-.606l1-4a.5.5 0 0 1 .131-.232l9.642-9.642a.5.5 0 0 0-.642.056L6.854 4.854a.5.5 0 1 1-.708-.708L9.44.854A1.5 1.5 0 0 1 11.5.796a1.5 1.5 0 0 1 1.998-.001" />
                                    </svg>
                                </a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

    </div>
@endsection
