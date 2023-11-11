<div class="w-96 border-r-2 h-screen bg-white fixed left-0 top-0 z-50">
  <div class="mx-6 mb-4">
    <div class="py-8 mb-6">
      <h1 class="font-bold text-3xl">UC-Showroom</h1>
    </div>
    <div>
      <div class="flex flex-col gap-4">
        <div class="flex gap-3 items-center bg-gray-100 py-2.5 px-3.5 rounded-lg text-blue-600">
          <i data-feather="home"></i>
          <p class="text-xl font-medium">Dashboard</p>
        </div>
        <div class="flex gap-3 items-center py-2.5 px-3.5 rounded-lg">
          <i data-feather="shopping-cart"></i>
          <a class="text-xl font-medium" href="{{ route('orders.index') }}">Order</a>
        </div>
        <div class="flex gap-3 items-center py-2.5 px-3.5 rounded-lg">
          <i data-feather="user"></i>
          <a class="text-xl font-medium" href="{{ route('customers.index') }}">Customer</a>
        </div>
        <div class="flex gap-3 items-center py-2.5 px-3.5 rounded-lg">
          <img class="w-6 h-6 object-cover" src="{{ URL::to('/') }}/icons/car.png" />
          <a class="text-xl font-medium" href="{{ route('vehicles.index') }}">Vehicle</a>
        </div>
      </div>
    </div>
  </div>
</div>
