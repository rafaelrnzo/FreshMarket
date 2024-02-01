@extends('layouts.master')
@section('content')
    <main class="flex-1  ">
        <section class="w-full h-screen flex items-center justify-center ">
            <div class=" space-y-10 xl:space-y-16 ">
                <div class="grid max-w-screen mx-auto gap-4 items-center md:grid-cols-2 md:gap-16">
                    <div>
                        <h3
                            class="lg:leading-tighter text-3xl font- tracking-tighter sm:text-4xl md:text-5xl xl:text-[3.4rem] 2xl:text-[3.75rem] text-green-700">
                            Lorem ipsum dolor, sit amet consectetur adipisicing.
                        </h3>
                        <p class="mx-auto max-w-[700px]` text-gray-500 md:text-xl dark:text-gray-400">
                            Experience the finest coffee sourced from the best coffee farms around the world.
                        </p>
                    </div>
                    <div class="flex flex-col items-end space-y-4 w-full   ">
                        <section class=" max-w-md p-8 bg-whiterounded-xl w-full  border border-gray-200 rounded-xl">
                            <p class="text-2xl font-bold mb-4 text-start text-green-700">Login</p>

                            <form class="mt-8 space-y-6" action="{{ route('auth') }}" method="post">
                                @csrf
                                <div>
                                    <label for="username" class="block mb-2 text-sm font-medium text-black/75">Your
                                        Username</label>
                                    <input type="username" name="username" id="username"
                                        class="bg-gray-50 border border-gray-200 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5 "
                                        placeholder="username" required>
                                </div>
                                <div>
                                    <label for="password" class="block mb-2 text-sm font-medium text-black/75">Your
                                        password</label>
                                    <input type="password" name="password" id="password" placeholder="••••••••"
                                        class="bg-gray-50 border border-gray-200 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5"
                                        required>
                                </div>
                                <div class="flex items-start">
                                    <div class="flex items-center h-5">
                                        <input id="remember" aria-describedby="remember" name="remember" type="checkbox"
                                            class="w-4 h-4 border-gray-200 rounded bg-gray-50 focus:ring-3 focus:ring-green-300 dark:focus:ring-green-600 dark:ring-offset-gray-800"
                                            required>
                                    </div>
                                    <div class="ms-3 text-sm">
                                        <label for="remember" class="font-medium text-gray-500 dark:text-gray-400">Remember
                                            this
                                            device</label>
                                    </div>

                                </div>
                                <button
                                    class="inline-flex items-center justify-center whitespace-nowrap rounded-md bg-green-700 hover:bg-green-600 w-full py-2.5"
                                    type="submit">
                                    <p class="text-base text-white">
                                        Continue Shopping
                                    </p>
                                </button>

                            </form>
                        </section>

                    </div>
                </div>
            </div>
        </section>
        <section class="w-full py-12 md:py-24 lg:py-32">
            <div class="container space-y-12 px-4 md:px-6">
                <div class="flex flex-col items-center justify-center space-y-4 text-center">
                    <div class="space-y-2">
                        <div class="inline-block rounded-lg bg-gray-100 px-3 py-1 text-sm dark:bg-gray-800">
                            Featured Products
                        </div>
                        <h2 class="text-3xl font-bold tracking-tighter sm:text-5xl">Discover Our Best Sellers</h2>
                        <p
                            class="max-w-[900px] text-gray-500 md:text-xl/relaxed lg:text-base/relaxed xl:text-xl/relaxed dark:text-gray-400">
                            Our collection of the most popular products in the past month.
                        </p>
                    </div>
                </div>
                <div
                    class="mx-auto grid items-start gap-8 sm:max-w-4xl sm:grid-cols-2 md:gap-12 lg:max-w-5xl lg:grid-cols-3">
                    <div class="grid gap-1">
                        <h3 class="text-lg font-bold">Espresso</h3>
                        <p class="text-sm text-gray-500 dark:text-gray-400">
                            A rich, full-bodied coffee with a caramel-like sweetness.
                        </p>
                    </div>
                    <div class="grid gap-1">
                        <h3 class="text-lg font-bold">Cappuccino</h3>
                        <p class="text-sm text-gray-500 dark:text-gray-400">
                            A perfect balance of espresso, steamed milk, and foam.
                        </p>
                    </div>
                    <div class="grid gap-1">
                        <h3 class="text-lg font-bold">Latte</h3>
                        <p class="text-sm text-gray-500 dark:text-gray-400">A creamy blend of espresso and steamed milk.</p>
                    </div>
                </div>
            </div>
        </section>

    </main>
    <footer class="flex flex-col gap-2 sm:flex-row py-6 w-full shrink-0 items-center px-4 md:px-6 border-t">
        <p class="text-xs text-gray-500 dark:text-gray-400">© 2024 Coffee Shop. All rights reserved.</p>
        <nav class="sm:ml-auto flex gap-4 sm:gap-6">
            <a class="text-xs hover:underline underline-offset-4" href="#" rel="ugc">
                Terms of Service
            </a>
            <a class="text-xs hover:underline underline-offset-4" href="#" rel="ugc">
                Privacy
            </a>
        </nav>
    </footer>
    @push('script')
        <script>
            setTimeout(() => {
                document.getElementById('warning').style.display = 'none';
            }, 5000);
        </script>
    @endpush
@endsection
