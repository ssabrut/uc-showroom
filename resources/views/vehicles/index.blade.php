@extends('layouts.app')

@section('content')
  <div>
    <div class="flex justify-between items-center mb-14">
      <div>
        @include('components.content-page-title', ['title' => 'Vehicles Data'])
        <p>A list of all the vehicles in your showroom.</p>
      </div>
      <div>
        <a class="bg-blue-600 text-white font-semibold py-2 px-3 rounded no-underline"
          href="{{ route('vehicles.create') }}">Add vehicle</a>
      </div>
    </div>
    <div>
      <table class="w-full">
        <thead class="border-b-2">
          <tr>
            <th class="w-1/12 text-left font-medium pb-4">ID</th>
            <th class="w-1/12 text-left font-medium pb-4">Model</th>
            <th class="w-1/12 text-left font-medium pb-4">Year</th>
            <th class="w-1/12 text-left font-medium pb-4">Passenger Capacity</th>
            <th class="w-1/12 text-left font-medium pb-4">Manufacture</th>
            <th class="w-1/12 text-left font-medium pb-4">Price</th>
            <th class="w-1/12 text-left font-medium pb-4">Type</th>
            <th class="w-1/12 text-left font-medium pb-4"></th>
          </tr>
        </thead>
        <tbody>
          @foreach ($vehicles as $vehicle)
            <tr>
              <td class="py-4">{{ $vehicle->id }}</td>
              <td class="py-4">{{ $vehicle->model }}</td>
              <td class="py-4">{{ $vehicle->year }}</td>
              <td class="py-4">{{ $vehicle->capacity }}</td>
              <td class="py-4">{{ $vehicle->manufacture }}</td>
              <td class="py-4">Rp. {{ number_format($vehicle->price, 0, '.', ',') }}</td>
              <td class="py-4">{{ $vehicle->type }}</td>
              <td class="py-4">
                <div class="flex items-center gap-4">
                  <a class="no-underline text-blue-600 font-semibold"
                    href="{{ route('vehicles.edit', $vehicle->id) }}">Edit</a>
                  <form action="{{ route('vehicles.destroy', $vehicle->id) }}" method="POST">
                    @method('DELETE')
                    @csrf
                    <button class="no-underline text-red-600 font-semibold">Delete</button>
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
