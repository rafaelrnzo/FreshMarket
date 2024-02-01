<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Fonts -->
    <link rel="stylesheet" href="../css/app.css">

    <!-- Styles -->
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter&family=Newsreader:opsz@6..72&display=swap');

        * {
            text-decoration: none;
            padding: 0;
            margin: 0;
        }

        p {
            font-family: 'Inter', sans-serif;
        }

        h3 {
            font-family: 'Newsreader', serif;
        }
    </style>

<body class="antialiased bg-white">
    @include('sweetalert::alert')

    <div class="h-full mx-auto">
        <header
            class="fixed top-0 flex justify-between items-center mx-auto p-4 lg:px-32 bg-white w-full border-b border-b-gray-200">
            <h3 class="xl:text-4xl text-xl font-medium text-green-700">Fresh Canteen</h3>
            <nav class="lg:block hidden">
                <ul class="flex space-x-8 items-center">
                    <li class=" hover:border-b hover:border-b-black">
                        <a class="text-black " href="#">
                            <p class="text-md font-medium">Shop</p>
                        </a>
                    </li>
                    <li class=" hover:border-b hover:border-b-black">
                        <a class="text-black " href="#">
                            <p class="text-md font-medium">TopUp</p>
                        </a>
                    </li>
                    <li class=" hover:border-b hover:border-b-black">
                        <a class="text-black " href="#">
                            <p class="text-md font-medium">My Profile</p>
                        </a>
                    </li>

                    <li>
                        <a href="">
                            <div class="bg-green-700 px-4 p-2 rounded-md">
                                <p class="text-white font-medium text-sm">Basket</p>
                            </div>
                        </a>
                    </li>
                </ul>
            </nav>
        </header>

        <div class="h-auto mt-[4.5rem] lg:py-16 lg:px-32 md:px-24 px-4 py-4">

            @yield('content')
        </div>

        <div class="fixed bottom-0  h-auto w-full mb-16 ">
            <div class="flex justify-end px-4">
                <a href="{{ route('cart.index') }}" class="bg-green-700 p-4 py-3 rounded-full text-white">
                    <i class="fa-solid fa-cart-shopping"></i>
                </a>
            </div>
        </div>

        <footer
            class="fixed bottom-0 w-full h-14 bg-white border-t border-gray-200 flex items-center justify-around  lg:hidden">
            <a class="group" href="#">
                <i class="fa-solid fa-house"></i>
                <span class="sr-only">Home</span>
            </a>
            <a class="group" href="#">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                    class="h-6 w-6 text-gray-500 group-hover:text-blue-500 dark:text-gray-400 dark:group-hover:text-blue-400">
                    <circle cx="11" cy="11" r="8"></circle>
                    <path d="m21 21-4.3-4.3"></path>
                </svg>
                <span class="sr-only">Search</span>
            </a>
            <a class="group" href="#">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                    class="h-6 w-6 text-gray-500 group-hover:text-blue-500 dark:text-gray-400 dark:group-hover:text-blue-400">
                    <path d="M6 8a6 6 0 0 1 12 0c0 7 3 9 3 9H3s3-2 3-9"></path>
                    <path d="M10.3 21a1.94 1.94 0 0 0 3.4 0"></path>
                </svg>
                <span class="sr-only">Notifications</span>
            </a>
            <a class="group" href="#">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                    class="h-6 w-6 text-gray-500 group-hover:text-blue-500 dark:text-gray-400 dark:group-hover:text-blue-400">
                    <path d="M19 21v-2a4 4 0 0 0-4-4H9a4 4 0 0 0-4 4v2"></path>
                    <circle cx="12" cy="7" r="4"></circle>
                </svg>
                <span class="sr-only">Profile</span>
            </a>
        </footer>
    </div>
    <script src="https://kit.fontawesome.com/0fe05a22a1.js" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.js"></script>
</body>

</html>
