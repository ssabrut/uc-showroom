@extends('layouts.app')

@section('content')
  <div>
    <div class="flex justify-between items-center mb-14">
      <div>
        <h1 class="font-medium text-xl mb-2">Customer List</h1>
        <p>A list of all the users in your showroom including their id card, name, address, and phone number.</p>
      </div>
      <div>
        <button class="bg-blue-600 text-white font-semibold py-1.5 px-3 rounded">Add user</button>
      </div>
    </div>
    <div>
      <table class="w-full">
        <thead class="border-b-2">
          <tr>
            <th class="w-1/6 text-left font-medium pb-4">ID</th>
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
              <td class="py-4">{{ $customer->phone }}</td>
              <td class="py-4">Edit</td>
            </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
@endsection
