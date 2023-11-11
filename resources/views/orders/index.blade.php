@extends('layouts.app')

@section('content')
  <div>
    <div class="flex justify-between items-center mb-14">
      <div>
        @include('components.content-page-title', ['title' => 'Orders Data'])
        <p>A list of all the orders in your showroom.</p>
      </div>
      <div>
        <a class="bg-blue-600 text-white font-semibold py-2 px-3 rounded no-underline"
          href="{{ route('orders.create') }}">Add order</a>
      </div>
    </div>
    <div>
      <table class="w-full">
        <thead class="border-b-2">
          <tr>
            <th class="w-1/12 text-left font-medium pb-4">ID</th>
            <th class="w-1/12 text-left font-medium pb-4">Name</th>
            <th class="w-1/12 text-left font-medium pb-4">Price</th>
            <th class="w-1/12 text-left font-medium pb-4"></th>
          </tr>
        </thead>
        <tbody>
          @foreach ($orders as $order)
            <tr>
              <td class="py-4">{{ $order->id }}</td>
              <td class="py-4">{{ $order->user->name }}</td>
              <td class="py-4">Rp. {{ number_format($price[$loop->index], 0, '.', ',') }}</td>
              <td class="py-4">
                <div class="flex items-center gap-4">
                  <a class="no-underline text-blue-600 font-semibold"
                    href="{{ route('orders.edit', $order->id) }}">Edit</a>
                  <form action="">
                    <button>Delete</button>
                  </form>
                </div>
              </td>
            </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
@endsection
