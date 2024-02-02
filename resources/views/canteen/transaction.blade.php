@extends('layouts.admin')
@section('content')
    <div class="px-12 pt-16">

        <div class="flex justify-between items-center mb-6">
            <h1 class="text-2xl font-semibold text-white">Transactions List</h1>
        </div>
        @if (session('message'))
            @if (is_array(session('message')) && count(session('message')) > 1)
                <div role="alert" class="alert {{ session('message')[0] }} mb-8" id="warning">
                    <span>
                        TopUp Success
                    </span>
                </div>
            @endif
        @endif



        <div class="relative overflow-x-auto">
            <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        {{-- <th scope="col" class="px-6 py-3" align="left">
                            </th> --}}
                        <th scope="col" class="px-6 py-3" align="left">
                            Order ID
                        </th>
                        <th scope="col" class="px-6 py-3" align="left">
                            User
                        </th>
                        <th scope="col" class="px-6 py-3" align="left">
                            Product
                        </th>
                        <th scope="col" class="px-6 py-3" align="left">
                            Date
                        </th>
                        <th scope="col" class="px-6 py-3" align="left">
                            Status
                        </th>
                        <th scope="col" class="px-6 py-3" align="left">
                            Action
                        </th>
                        <th scope="col" class="px-6 py-3" align="left">
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($transactions as $date => $transaction)
                        <tr class="hidden">
                            <td rowspan="{{ count($transaction) }}">{{ $date }}</td>
                            @foreach ($transaction as $index => $per_transaction)
                                @if ($index > 0)
                        </tr>
                    @endif
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4">{{ $per_transaction->order_id }}</td>
                        <td class="px-6 py-4">{{ $per_transaction->user->name }}</td>
                        <td class="px-6 py-4">{{ $per_transaction->product->name }}</td>
                        <td class="px-6 py-4">{{ $per_transaction->created_at }}</td>
                        <td class="px-6 py-4">
                            @if ($per_transaction->status == 'taken')
                                <p>Diambil</p>
                            @elseif($per_transaction->status == 'paid')
                                <p>Dibayar</p>
                            @endif

                        </td>
                        <td class="px-6 py-4">
                            @if ($per_transaction->status == 'paid')
                                <div class="flex justify-center items-center my-1 gap-2">
                                    <form action="{{ route('kantin.confirm.transaction') }}" method="post">
                                        @csrf
                                        <input type="hidden" value="{{ $per_transaction->id }}" name="transaction_id">
                                        <input type="hidden" value="{{ $per_transaction->user->id }}" name="user_id">
                                        {{-- <input type="hidden" name="nominals" value="{{ $per_transaction->nominals }}"> --}}
                                        <button type="submit"
                                            class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5  dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">
                                            Confirm
                                        </button>
                                    </form>
                                    <form action="{{ route('bank.topup.reject') }}" method="POST">
                                        @csrf
                                        <input type="hidden" value="{{ $per_transaction->id }}" name="transaction_id">
                                        <button type="submit"
                                            class="focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5  dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900">Reject</button>
                                    </form>
                                </div>
                            @else
                                <button
                                    class="success p-2 text-white font-semibold flex items-center gap-2 rounded-md text-center">
                                    <span
                                        class="bg-green-100 text-green-800 text-xs font-medium me-2 px-2.5 py-0.5 rounded dark:bg-gray-700 dark:text-green-400 border border-green-400">Success</span>

                                </button>
                            @endif
                        </td>
                        @if ($index === 0)
                            <td class="flex gap-2" rowspan="{{ count($transaction) }}">
                                <a href="{{ route('kantin.transaction.print', ['date' => $date, 'user_id' => $per_transaction->user->id]) }}"
                                    class="btn btn-error text-black">
                                    View
                                </a>
                            </td>
                        @endif
                        @endforeach
                    </tr>
                    @endforeach

                </tbody>
            </table>
        </div>
    </div>
@endsection

@push('script')
    <script>
        setTimeout(() => {
            document.getElementById('warning').style.display = 'none';
        }, 5000);
    </script>
@endpush
