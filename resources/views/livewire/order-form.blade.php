<div>
  @if ($selectedCustomer == 0)
    <p>Choose customer from the list.</p>
  @else
    <p>Choose vehicle from the list.</p>
  @endif
  <div class="mt-12">
    <div>
      @if ($selectedCustomer == 0)
        <table class="w-full">
          <thead class="border-b-2">
            <tr>
              <th class="w-1/12 text-left font-medium pb-4"></th>
              <th class="w-1/6 text-left font-medium pb-4">ID Card</th>
              <th class="w-1/6 text-left font-medium pb-4">Name</th>
              <th class="w-1/6 text-left font-medium pb-4">Address</th>
              <th class="w-1/6 text-left font-medium pb-4">Phone</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($customers as $customer)
              <tr>
                <td class="py-4 text-center">
                    <button class="bg-blue-600 py-2 px-3 text-white font-semibold rounded">Select</button>
                </td>
                <td class="py-4">{{ $customer->id }}</td>
                <td class="py-4">{{ $customer->name }}</td>
                <td class="py-4">{{ $customer->address }}</td>
                <td class="py-4">{{ $customer->phone }}</td>
              </tr>
            @endforeach
          </tbody>
        </table>
      @else
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
                <td class="py-4">{{ $vehicle->price }}</td>
                <td class="py-4">{{ $vehicle->type }}</td>
              </tr>
            @endforeach
          </tbody>
        </table>
      @endif
    </div>
  </div>
</div>
