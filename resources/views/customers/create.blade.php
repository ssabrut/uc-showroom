@extends('layouts.app')

@section('content')
  <div>
    <div class="mb-14">
      @include('components.content-page-title', ['title' => 'Add New Customer'])
    </div>
    <div>
      <form class="w-1/3" action="{{ route('customers.store') }}" method="POST">
        @csrf
        <div class="mb-6">
          <label for="id" class="block text-sm font-medium leading-6 text-gray-900 required">ID Card</label>
          <div class="mt-2">
            <input class="border w-full py-1.5 px-3 rounded-md" type="text" name="id" id="id" pattern="\d*"
              minlength="16" maxlength="16" autocomplete="off" placeholder="16 digit number" required />
            <p class="text-sm text-gray-400 mt-2">Input only 16 digit number</p>
          </div>
        </div>
        <div class="mb-6">
          <label for="name" class="block text-sm font-medium leading-6 text-gray-900 required">Full Name</label>
          <div class="mt-2">
            <input class="border w-full py-1.5 px-3 rounded-md" type="text" name="name" id="name"
              autocomplete="off" placeholder="e.g. John Doe" required />
          </div>
        </div>
        <div class="mb-6">
          <label for="address" class="block text-sm font-medium leading-6 text-gray-900 required">Street Address</label>
          <div class="mt-2">
            <input class="border w-full py-1.5 px-3 rounded-md" type="text" name="address" id="address"
              autocomplete="off" placeholder="e.g. 123 Test Street" required />
          </div>
        </div>
        <div class="mb-10">
          <label for="phone" class="block text-sm font-medium leading-6 text-gray-900 required">Phone Number</label>
          <div class="mt-2">
            <input class="border w-full py-1.5 px-3 rounded-md" type="text" name="phone" id="phone" pattern="\d*"
              minlength="9" maxlength="12" autocomplete="off" placeholder="e.g. 081234567890" required />
            <p class="text-sm text-gray-400 mt-2">Input only number between 9 to 12 digit</p>
          </div>
        </div>
        <hr class="mb-10" />
        <div class="flex items-center justify-end gap-2">
          <a class="font-semibold py-2 px-3 rounded-md" href="{{ route('customers.index') }}">Cancel</a>
          <button class="bg-blue-600 font-semibold text-white py-2 px-3 rounded-md border-0"
            type="submit">Submit</button>
        </div>
      </form>
    </div>
  </div>
  </div>
@endsection
