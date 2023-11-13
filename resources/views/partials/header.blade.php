<header class="w-[calc(100%-384px)] fixed right-0 top-0 bg-white border-b-2 z-40">
  <div class="px-8 py-8">
    <div>
      @if (request()->routeIs('home'))
        <h1 class="font-semibold text-xl">Dashboard</h1>
      @elseif(request()->routeIs('orders.*'))
        <h1 class="font-semibold text-xl">Order</h1>
      @elseif(request()->routeIs('customers.*'))
        <h1 class="font-semibold text-xl">Customer</h1>
      @elseif(request()->routeIs('vehicles.*'))
        <h1 class="font-semibold text-xl">Vehicle</h1>
      @endif
    </div>
  </div>
</header>
