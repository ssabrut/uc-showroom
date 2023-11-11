<div>
  <div class="mt-12">
    <div>
      <p>ID Card : {{ $order->user->id }}</p>
      <p>Name : {{ $order->user->name }}</p>
      <p>Address : {{ $order->user->address }}</p>
      <p>Phone : {{ $order->user->phone }}</p>
    </div>
    <div class="grid grid-cols-4 gap-14">
      <div class="mt-8 col-span-3">
        <table class="w-full">
          <thead class="border-b-2">
            <tr>
              <th class="w-1/12 text-left font-medium pb-4"></th>
              <th class="w-1/12 text-left font-medium pb-4">Model</th>
              <th class="w-1/12 text-left font-medium pb-4">Year</th>
              <th class="w-1/12 text-left font-medium pb-4">Passenger Capacity</th>
              <th class="w-1/12 text-left font-medium pb-4">Manufacture</th>
              <th class="w-1/12 text-left font-medium pb-4">Type</th>
              <th class="w-1/12 text-left font-medium pb-4">Price</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($vehicles as $vehicle)
              <tr class="border-b-2">
                <td class="py-4 text-center">
                  @if (!in_array($vehicle->id, $selectedVehicle))
                    <button class="bg-blue-600 py-1.5 px-3 text-white font-semibold rounded"
                      wire:click="addVehicle('{{ $vehicle->id }}')">Select</button>
                  @else
                    <button class="bg-red-600 py-1.5 px-3 text-white font-semibold rounded"
                      wire:click="removeVehicle('{{ $vehicle->id }}')">Remove</button>
                  @endif
                </td>
                <td class="py-4">{{ $vehicle->model }}</td>
                <td class="py-4">{{ $vehicle->year }}</td>
                <td class="py-4">{{ $vehicle->capacity }}</td>
                <td class="py-4">{{ $vehicle->manufacture }}</td>
                <td class="py-4">{{ $vehicle->type }}</td>
                <td class="py-4">{{ $vehicle->price }}</td>
              </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
    <div class="flex items-center justify-end mt-8 gap-8">
      <button wire:click="clear">Back</button>
      <button class="bg-blue-600 font-semibold text-white py-2 px-3 rounded-md border-0" wire:click="updateOrder">Update
        Order</button>
    </div>
  </div>
</div>
