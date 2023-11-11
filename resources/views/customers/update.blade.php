@extends('layouts.app')

@section('content')
  <div>
    <div class="mb-14">
      @include('components.content-page-title', ['title' => 'Add New Customer'])
    </div>
    <div>
      <form class="w-1/3" action="{{ route('customers.update', $customer->id) }}" method="POST">
        @method('PUT')
        @csrf
        <div class="mb-6">
          <label for="id" class="block text-sm font-medium leading-6 text-gray-900 required">ID Card</label>
          <div class="mt-2">
            <input class="border w-full py-1.5 px-3 rounded-md" type="number" name="id" id="id"
              autocomplete="off" placeholder="16 digit number" value="{{ old('id', $customer->id) }}" required />
          </div>
        </div>
        <div class="mb-6">
          <label for="name" class="block text-sm font-medium leading-6 text-gray-900 required">Full Name</label>
          <div class="mt-2">
            <input class="border w-full py-1.5 px-3 rounded-md" type="text" name="name" id="name"
              autocomplete="off" placeholder="e.g. John Doe" value="{{ old('name', $customer->name) }}" required />
          </div>
        </div>
        <div class="mb-6">
          <label for="address" class="block text-sm font-medium leading-6 text-gray-900 required">Street Address</label>
          <div class="mt-2">
            <input class="border w-full py-1.5 px-3 rounded-md" type="text" name="address" id="address"
              autocomplete="off" placeholder="e.g. 123 Test Street" value="{{ old('address', $customer->address) }}"
              required />
          </div>
        </div>
        <div class="mb-10">
          <label for="phone" class="block text-sm font-medium leading-6 text-gray-900 required">Phone Number</label>
          <div class="mt-2">
            <input class="border w-full py-1.5 px-3 rounded-md" type="number" name="phone" id="phone"
              autocomplete="off" placeholder="e.g. 081234567890" value="{{ old('phone', $customer->phone) }}" required />
          </div>
        </div>
        <hr class="mb-10" />
        <div class="flex items-center justify-end gap-2">
          <a class="font-semibold py-2 px-3 rounded-md" href="{{ route('customers.index') }}">Cancel</a>
          <button class="bg-green-600 font-semibold text-white py-2 px-3 rounded-md border-0"
            type="submit">Submit</button>
        </div>
      </form>
    </div>
  </div>
  </div>
@endsection
