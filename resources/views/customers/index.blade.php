@extends('layouts.app')

@section('content')
  <div>
    <div class="flex justify-between items-center mb-14">
      <div>
        @include('components.content-page-title', ['title' => 'Customers Data'])
        <p>A list of all the users in your showroom including their id card, name, address, and phone number.</p>
      </div>
      <div>
        <a class="bg-blue-600 text-white font-semibold py-2 px-3 rounded no-underline"
          href="{{ route('customers.create') }}">Add user</a>
      </div>
    </div>
    <div>
      <table class="w-full">
        <thead class="border-b-2">
          <tr>
            <th class="w-1/6 text-left font-medium pb-4">ID Card</th>
            <th class="w-1/4 text-left font-medium pb-4">Name</th>
            <th class="w-1/3 text-left font-medium pb-4">Address</th>
            <th class="w-1/6 text-left font-medium pb-4">Phone</th>
            <th class="w-1/6 text-left font-medium pb-4"></th>
          </tr>
        </thead>
        <tbody>
          @foreach ($customers as $customer)
            <tr>
              <td class="py-4">{{ $customer->id }}</td>
              <td class="py-4">{{ $customer->name }}</td>
              <td class="py-4">{{ $customer->address }}</td>
              <td class="py-4">{{ substr($customer->phone, 0, 4) }} -
                {{ substr($customer->phone, 4, 4) }} - {{ substr($customer->phone, 8, 4) }}</td>
              <td class="py-4">
                <div class="flex items-center gap-4">
                  <a class="no-underline text-blue-600 font-semibold"
                    href="{{ route('customers.edit', $customer->id) }}">Edit</a>
                  <form action="{{ route('customers.destroy', $customer->id) }}" method="POST">
                    @method('DELETE')
                    @csrf
                    <button class="no-underline text-red-600 font-semibold" type="submit">Delete</button>
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
