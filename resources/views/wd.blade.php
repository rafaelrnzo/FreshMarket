@extends('layouts.master')
@section('content')
    <div class="  flex items-center justify-center w-full">
        <div class="w-full">

            <a href="{{ route('index') }}" class="underline text-black hover:text-green-700">
                back
            </a>
            <div class="flex items-end justify-between w-full">
                <h3 class="font-medium text-4xl text-black ">Withdraw</h3>
                @if (Auth::user())
                <div class="flex space-x-12 p-4 rounded-md">
                    <div class="flex gap-2 border bg-green-700 p-4 rounded-md">
                        <div class="bg-white p-2 rounded-md px-3 flex gap-2 items-center">
                            <i class="fa-solid fa-credit-card text-green-700"></i>
                            <p class="text-green-700 text-bold"> @currency(Auth::user()->wallet->credit) </p>
                        </div>
                    
                    </div>
                </div>      
            @else
                <div class=""></div>
            @endif
            </div>
            <form action="{{ route('wd.proceed') }}" class="flex flex-col items-center mt-4 gap-2" method="POST">
                @csrf
                <div class="w-full">
                    <label for="Nominal" class="block mb-2 text-sm font-medium text-black/75">Your
                        Nominal</label>
                    <input type="text" name="nominals" id="Nominal" placeholder="00000"
                        class="bg-gray-50 border border-gray-200 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5"
                        required>
                </div>
                <button type="submit" class="text-white bg-green-700 rounded-md py-3 font-semibold w-full mt-2">Withdraw</button>
            </form>
        </div>
    </div>
@endsection
