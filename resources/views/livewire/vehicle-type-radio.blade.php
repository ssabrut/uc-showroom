<div>
  <div class="mb-6">
    <label for="type" class="block text-sm font-medium leading-6 text-gray-900 required">Type</label>
    <div class="flex items-center justify-between mt-2">
      <div class="block">
        <input type="radio" id="motobike" name="type" wire:click="setVehicleType('Motobike')" required>
        <label for="motobike">Motobike</label>
      </div>
      <div class="block">
        <input type="radio" id="truck" name="type" wire:click="setVehicleType('Truck')" required>
        <label for="truck">Truck</label>
      </div>
      <div class="block">
        <input type="radio" id="car" name="type" wire:click="setVehicleType('Car')" required>
        <label for="car">Car</label>
      </div>
    </div>
    <input type="hidden" name="type" value="{{ $vehicleType }}">
  </div>
  <div>
    @if ($vehicleType == 'Motobike')
      <div class="mb-6">
        <label for="trunk_area" class="block text-sm font-medium leading-6 text-gray-900 required">Trunk Area</label>
        <div class="mt-2">
          <input class="border w-full py-1.5 px-3 rounded-md" type="number" name="trunk_area" id="trunk_area"
            autocomplete="off" placeholder="e.g. 2" wire:model="trunkArea" required />
        </div>
      </div>
      <div class="mb-6">
        <label for="engine_capacity" class="block text-sm font-medium leading-6 text-gray-900 required">Engine
          Capacity</label>
        <div class="mt-2">
          <input class="border w-full py-1.5 px-3 rounded-md" type="number" name="engine_capacity" id="engine_capacity"
            autocomplete="off" placeholder="e.g. 15" wire:model="engineCapacity" required />
        </div>
      </div>
    @elseif ($vehicleType == 'Truck')
      <div class="mb-6">
        <label for="total_wheel" class="block text-sm font-medium leading-6 text-gray-900 required">Total Wheel</label>
        <div class="mt-2">
          <input class="border w-full py-1.5 px-3 rounded-md" type="number" name="total_wheel" id="total_wheel"
            autocomplete="off" placeholder="e.g. 8" required />
        </div>
      </div>
      <div class="mb-6">
        <label for="cargo_area" class="block text-sm font-medium leading-6 text-gray-900 required">Cargo Area</label>
        <div class="mt-2">
          <input class="border w-full py-1.5 px-3 rounded-md" type="number" name="cargo_area" id="cargo_area"
            autocomplete="off" placeholder="e.g. 15" required />
        </div>
      </div>
    @elseif ($vehicleType == 'Car')
      <div class="mb-6">
        <label for="fuel_type" class="block text-sm font-medium leading-6 text-gray-900 required">Fuel Type</label>
        <div class="mt-2">
          <input class="border w-full py-1.5 px-3 rounded-md" type="text" name="fuel_type" id="fuel_type"
            autocomplete="off" placeholder="e.g. Gas" required />
        </div>
      </div>
      <div class="mb-6">
        <label for="trunk_area" class="block text-sm font-medium leading-6 text-gray-900 required">Trunk Area</label>
        <div class="mt-2">
          <input class="border w-full py-1.5 px-3 rounded-md" type="number" name="trunk_area" id="trunk_area"
            autocomplete="off" placeholder="e.g. 15" required />
        </div>
      </div>
    @endif
  </div>
</div>
