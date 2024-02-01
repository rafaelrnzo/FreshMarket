<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Receipt</title>
    @vite(['resources/css/app.css'])
    <style>
        @media print {
            #back-to-home {
                display: none;
            }
        }
    </style>
</head>

<body>
    {{-- <div class="container mx-auto px-3 py-8 h-screen">
        <h1 class="card-title">Receipt</h1>
        <p>Pembelian {{ $user->name }}</p>
        <p>Produk Yang Dibeli</p>
        <ul class="mt-4">
            @foreach ($transactions as $transaction)
                <li>
                    {{ $transaction->product->name }} | {{ $transaction->product->price }} x
                    {{ $transaction->quantity }} | Total Rp. {{ $transaction->total_prices }}
                </li>
            @endforeach
        </ul>
        <hr class="mt-4">
        <div class="flex justify-end w-full" id="back-to-home">
                <a href="{{ route('admin.transaction') }}" type="submit" class="btn btn-primary">Kembali</a>
        </div>


    </div> --}}


    <div class="flex flex-col bg-white dark:bg-gray-800 p-6 rounded-lg shadow-md w-full max-w-2xl">
        <header class="flex justify-between items-center mb-6">
            <img src="/placeholder.svg" alt="Store Logo" width="50" height="50" class="rounded-full"
                style="aspect-ratio: 50 / 50; object-fit: cover;" />
            <h1 class="text-2xl font-semibold text-center flex-grow">Order Receipt</h1>
            <div></div>
        </header>
        <section class="mb-6">
            <h2 class="text-xl font-semibold mb-2">Order Details</h2>
            <div class="grid gap-2 text-sm">
                <div>Order Number: #123456</div>
                <div>Order Date: January 31, 2024</div>
                <div>Shipping Address: 123 Main St, Anytown, CA 12345</div>
                <div>Billing Address: 123 Main St, Anytown, CA 12345</div>
            </div>
        </section>
        <section class="mb-6">
            <h2 class="text-xl font-semibold mb-2">Products</h2>
            <div class="grid gap-2 text-sm">
                <div class="flex items-center gap-2">
                    <img src="/placeholder.svg" alt="Product Image" width="50" height="50" class="rounded-md"
                        style="aspect-ratio: 50 / 50; object-fit: cover;" />
                    <div class="flex-grow">Product Name</div>
                    <div>Qty: 2</div>
                    <div>Price: $50.00</div>
                    <div>Subtotal: $100.00</div>
                </div>
                <div class="flex items-center gap-2">
                    <img src="/placeholder.svg" alt="Product Image" width="50" height="50" class="rounded-md"
                        style="aspect-ratio: 50 / 50; object-fit: cover;" />
                    <div class="flex-grow">Product Name</div>
                    <div>Qty: 1</div>
                    <div>Price: $30.00</div>
                    <div>Subtotal: $30.00</div>
                </div>
            </div>
        </section>
        <section class="mb-6">
            <h2 class="text-xl font-semibold mb-2">Payment</h2>
            <div class="grid gap-2 text-sm">
                <div>Total Amount: $130.00</div>
                <div>Taxes: $10.00</div>
                <div>Payment Method: Credit Card</div>
            </div>
        </section>
        <section>
            <h2 class="text-xl font-semibold mb-2">Support</h2>
            <div class="grid gap-2 text-sm">
                <div>
                    If you have any questions or need further assistance, please contact our customer support at
                    support@onlinestore.com or call us at +1 888 8888 8888.
                </div>
            </div>
        </section>
    </div>



    <script>
        window.print();
    </script>

</body>

</html>
