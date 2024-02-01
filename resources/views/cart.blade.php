@extends('layouts.master')
@section('content')
    <div class=" pb-16 mx-auto">
        <div class="flex items-center justify-between py-2">
            <h3 class="font-medium text-6xl text-black">Basket</h3>
            <a href="{{ route('index') }}" class=" ">
                <p
                    class=" text-black underline underline-offset-2c:\Users\acer\usk_fintech\resources\views\profile.blade.php">
                    Continue Shopping
                </p>
            </a>
        </div>
        <div class="flex justify-between gap-8">
            <div class="grid grid-cols-1 gap-3 w-full ">
                <div class="border-b border-gray-200 py-2 flex justify-between">
                    <p class="text-sm text-black">Product</p>
                    <p class="text-sm text-black">Total Price</p>
                </div>
                @if (count($transactions))
                    @foreach ($transactions as $transaction)
                        <div class="flex justify-start items-start">
                            <div class="overflow-hidden  ">
                                <img class="object-cover w-[160px] h-[140px] rounded-md"
                                    src="{{ $transaction->product->thumbnail }}" />
                            </div>
                            <div class="flex gap-2 flex-row w-full px-4 justify-between items-center">
                                <div class="">
                                    <p class="font-bold text-lg text-black">{{ $transaction->product->name }}</p>
                                    <div class="flex justify-between w-full">
                                        <p class="font-normal md:text-lg text-black"> @currency($transaction->product->price) x
                                            {{ $transaction->quantity }}</p>
                                    </div>
                                    <p class="text-base text-black font-medium md:hidden block">total: @currency($transaction->total_price)</p>
                                </div>
                                <div class="flex gap-2 items-center">
                                    <p class="font-normal text-lg text-black md:block hidden">@currency($transaction->total_price)</p>
                                    <form action="{{ route('cart.delete', $transaction->id) }}" method="POST">
                                        @csrf
                                        @method('delete')
                                        <button type="submit" class="btn btn-error text-black">
                                            <i class="fa-regular fa-circle-xmark"></i>
                                    </form>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @else
                    <p class="text-black text-lg">No Product in Cart!</p>
                @endif
            </div>
            <div class=" w-1/4 hidden md:block">
                <div class=" w-full max-h-full gap-2 flex flex-col  mt-2 rounded-lg">
                    <div class="flex justify-between items-center">
                        <p class="title font-medium text-lg text-black">
                            Total Price
                        </p>
                        <p class="price text-2xl font-normal text-black">
                            @currency($total_prices_all)
                        </p>
                    </div>
                    <div class="button">
                        <form action="{{ route('cart.pay') }}" method="POST">
                            @csrf
                            <input type="hidden" value="{{ $total_prices_all }}" name="total_prices">
                            <button type="submit" class="bg-green-700 rounded-md w-full py-2">
                                <p class="text-white">
                                    Pay Now
                                </p>
                            </button>
                        </form>

                    </div>
                </div>
            </div>


        </div>
    </div>





@endsection
