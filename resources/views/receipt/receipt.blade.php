<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Receipt</title>
    <script src="https://cdn.tailwindcss.com"></script>

    {{-- @vite(['resources/css/app.css']) --}}
    <style>
        @media print {
            #back-to-home {
                display: none;
            }
        }
    </style>
</head>

<body class="bg-slate-100 h-screen flex justify-center items-center ">


    <div class="flex flex-col bg-white dark:bg-gray-800 p-6 rounded-lg border border-gray-200 w-full max-w-xl">
        <header class="flex justify-between items-center mb-6">

            <h1 class="text-2xl font-semibold text-center flex-grow">Order Receipt</h1>
        </header>
        <section class="mb-6">
            <h2 class="text-xl font-semibold mb-2">Order Details</h2>
            <div class="grid gap-2 text-sm">
                <div>Order Number: #123456</div>
                <div>Order Date: January 31, 2024</div>
            </div>
        </section>
        <section class="mb-6">
            <h2 class="text-xl font-semibold mb-2">Products</h2>
            <div class="grid gap-2 text-sm">
                @foreach ($transactions as $transaction)
                    <div class="flex items-center gap-2">
                        <div class="flex-grow">{{ $transaction->product->name }}</div>
                        <div>{{ $transaction->product->price }} x {{ $transaction->quantity }}</div>
                    </div>
                @endforeach
            </div>
        </section>
        <section class="mb-6">
            <div class="grid gap-2 text-sm">
                <h1 class="font-semibold text-2xl">{{ 'total_prices' }} </h1>
            </div>
        </section>
        <section>
            <div class="flex justify-end mb-8">
                <form action="{{ route('receipt.take') }}" method="POST">
                    @csrf
                    <button type="submit" href="{{ route('index') }}" class="btn btn-primary mr-4">Kembali</button>
                </form>
            </div>
        </section>
    </div>

    <script>
        window.print();
    </script>

</body>

</html>
