@extends('layouts.app')

@section('content')
  <div>
    <div class="mb-14">
      @include('components.content-page-title', ['title' => 'Update Vehicle Data'])
    </div>
    <div>
      <form class="w-1/3" action="{{ route('vehicles.update', $vehicle->id) }}" method="POST">
        @method('PUT')
        @csrf
        <div class="mb-6">
          <label for="model" class="block text-sm font-medium leading-6 text-gray-900 required">Model</label>
          <div class="mt-2">
            <input class="border w-full py-1.5 px-3 rounded-md" type="text" name="model" id="model"
              autocomplete="off" placeholder="e.g. AMG" value="{{ old('model', $vehicle->model) }}" required />
          </div>
        </div>
        <div class="mb-6">
          <label for="year" class="block text-sm font-medium leading-6 text-gray-900 required">Year</label>
          <div class="mt-2">
            <input class="border w-full py-1.5 px-3 rounded-md" type="number" name="year" id="year"
              autocomplete="off" placeholder="e.g. 1997" value="{{ old('year', $vehicle->year) }}" required />
          </div>
        </div>
        <div class="mb-6">
          <label for="capacity" class="block text-sm font-medium leading-6 text-gray-900 required">Passenger
            Capacity</label>
          <div class="mt-2">
            <input class="border w-full py-1.5 px-3 rounded-md" type="number" name="capacity" id="capacity"
              autocomplete="off" placeholder="e.g. 4" value="{{ old('capacity', $vehicle->capacity) }}" required />
          </div>
        </div>
        <div class="mb-6">
          <label for="manufacture" class="block text-sm font-medium leading-6 text-gray-900 required">Manufacture</label>
          <div class="mt-2">
            <input class="border w-full py-1.5 px-3 rounded-md" type="text" name="manufacture" id="manufacture"
              autocomplete="off" placeholder="e.g. Germany" value="{{ old('manufacture', $vehicle->manufacture) }}"
              required />
          </div>
        </div>
        <div class="mb-6">
          <label for="price" class="block text-sm font-medium leading-6 text-gray-900 required">Price</label>
          <div class="mt-2">
            <input class="border w-full py-1.5 px-3 rounded-md" type="number" name="price" id="price"
              autocomplete="off" placeholder="e.g. 100000000" value="{{ old('price', $vehicle->price) }}" required />
          </div>
        </div>
        <livewire:vehicle-type-radio :vehicle="$vehicle" />
        <hr class="mb-10" />
        <div class="flex items-center justify-end gap-2">
          <a class="font-semibold py-2 px-3 rounded-md" href="{{ route('vehicles.index') }}">Cancel</a>
          <button class="bg-blue-600 font-semibold text-white py-2 px-3 rounded-md border-0"
            type="submit">Submit</button>
        </div>
      </form>
    </div>
  </div>
@endsection