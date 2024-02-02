@extends('layouts.admin')
@section('content')
    <div class="pt-16 px-12">

        <a class="btn btn-primary btn-sm mb-4 text-white" href="{{ route('admin.userindex') }}">Kembali</a>
        <h1 class="text-2xl font-semibold text-white">Edit User : {{ $user->name }}</h1>

        @if (session('message'))
            @if (is_array(session('message')) && count(session('message')) > 1)
                <div role="alert" class="alert alert-{{ session('message')[0] }} mt-3" id="warning">
                    <svg xmlns="http://www.w3.org/2000/svg" class="stroke-current shrink-0 h-6 w-6" fill="none"
                        viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                    <span>
                        {{ session('message')[1] }}
                    </span>
                </div>
            @endif
        @endif

        <div class="w-full mt-4">
            <form action="{{ route('admin.updateuserstore', $user->id) }}" method="POST"
                class="flex flex-col gap-4 w-full">
                @csrf
                @method('put')
                <div class="mb-2">
                    <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                        Username</label>
                    <input type="text" name="name" id="name" value="{{ $user->name }}"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="Enter User name..." required>
                </div>
                <div class="">

                    <label for="Role" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                        Role</label>
                    <select required class="select select-bordered w-full" name="role">
                        <option disabled selected>Pilih Role User</option>
                        @foreach ($roles as $role)
                            <option value="{{ $role->id }}" @if ($role->id == $user->role_id) selected @endif>
                                {{ Str::ucfirst($role->name) }}</option>
                        @endforeach
                    </select>
                    <button type="submit"
                        class="text-white mt-4 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">
                        Confirm
                    </button>

            </form>
        </div>
    </div>
    </div>


    @push('script')
        <script>
            setTimeout(() => {
                document.getElementById('warning').style.display = 'none';
            }, 5000);
        </script>
    @endpush

@endsection
