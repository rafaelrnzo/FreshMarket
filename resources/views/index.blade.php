    @extends('layouts.master')
    @section('content')
        <div class=" h-auto pb-16 ">
            <main class="flex flex-col gap-6">
                <div class="border-b border-b-gray-200 grid md:grid-cols-2 py-4 items-center">
                    <div class="flex flex-col items-start ">
                        <h3 class="text-6xl font-medium text-black">Produce</h3>
                        @if (!Auth::user())
                            <span class="text-base text-gray-500">Welcome back - {{ Auth::user()->name }}</span>
                        @else
                            <span class="text-base text-gray-500">Please Login </span>
                        @endif
                    </div>
                    <div class="flex  mt-1 items-center justify-end">
                        @if (Auth::user())
                            <div class="flex space-x-12 p-4 rounded-md">
                                <div class="flex gap-2 border bg-green-700 p-4 rounded-md">
                                    <div class="bg-white p-2 rounded-md px-3 flex gap-2 items-center">
                                        <i class="fa-solid fa-credit-card text-green-700"></i>
                                        <p class="text-green-700 text-bold"> @currency(Auth::user()->wallet->credit) </p>
                                    </div>
                                    <a href="{{ route('topup.index') }}"
                                        class="inline-flex items-center justify-center whitespace-nowrap rounded-md text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 border border-white bg-background hover:bg-accent hover:text-accent-foreground px-4 py-2 text-white">
                                        <div href="{{ route('topup.index') }}" class="flex flex-col justify-center items-center">
                                            <i class="fa-solid fa-square-plus text-xl"></i>
                                            TopUp
                                        </div>
                                    </a>
                                    <a href="{{ route('topup.index') }}"
                                        class="inline-flex items-center justify-center whitespace-nowrap rounded-md text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 border border-white bg-background hover:bg-accent hover:text-accent-foreground  px-4 py-2 text-white">
                                        <div class="flex flex-col justify-center items-center">
                                            <i class="fa-solid fa-money-bill-transfer text-xl"></i>
                                            Withdraw
                                        </div>

                                    </a>
                                </div>
                            </div>
                        @else
                            <div class=""></div>
                        @endif
                    </div>
                </div>
                <div class="grid md:grid-cols-3 grid-cols-2 gap-6">
                    @foreach ($products as $product)
                        <div class="rounded-lg border bg-card text-card-foreground shadow-sm w-full bg-green-50/50">
                            <div class="flex justify-between flex-col">
                                <div class="">
                                    <img src="{{ $product->thumbnail }}" alt="Heirloom tomato"
                                        class="w-full lg:h-[16rem] h-[6rem] object-cover rounded-md " />
                                </div>
                                <div class="p-4 flex justify-between flex-col h-full">
                                    <div class="flex justify-between items-center">
                                        <div class="">
                                            <p class="font-semibold">{{ $product->name }}</p>

                                        </div>
                                        <div
                                            class=" font-medium text-white text-sm bg-green-700 p-1 px-1.5 rounded-full  flex items-center justify-center">
                                            <p>
                                                {{ $product->stock }}
                                            </p>
                                        </div>
                                    </div>
                                    <p class="text-green-700 font-semibold">
                                        @currency($product->price)
                                    </p>
                                    <p class="text-sm text-gray-400">{{ $product->description }}</p>
                                    <div class="inline-flex justify-end w-full items-end">
                                        <div class="">
                                            <form action="{{ route('cart.add') }}" method="POST" class="w-full">
                                                @csrf
                                                <input type="hidden" value="{{ $product->id }}" name="product_id">
                                                <input value="1" min="1" name="quantity" type="number"
                                                    class="border border-gray-200 h-10 w-12 pl-2 rounded-md ">
                                                <button type="submit"
                                                    class="inline-flex items-center justify-center w-10 h-10  text-green-100 transition-colors duration-150 bg-green-700 rounded-lg focus:shadow-outline hover:bg-green-800">
                                                    <i class="fa-solid fa-plus"></i>
                                                </button>

                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </main>
        </div>
    @endsection
