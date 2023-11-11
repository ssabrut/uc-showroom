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
            <th class="w-1/6 text-left font-medium pb-4">ID</th>
            <th class="w-1/4 text-left font-medium pb-4">Model</th>
            <th class="w-1/3 text-left font-medium pb-4">Year</th>
            <th class="w-1/6 text-left font-medium pb-4">Passenger Capacity</th>
            <th class="w-1/6 text-left font-medium pb-4">Manufacture</th>
            <th class="w-1/6 text-left font-medium pb-4">Price</th>
            <th class="w-1/6 text-left font-medium pb-4"></th>
          </tr>
        </thead>
        <tbody>
          {{--  --}}
        </tbody>
      </table>
    </div>
  </div>
@endsection
