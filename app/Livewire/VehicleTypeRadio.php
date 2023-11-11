<?php

namespace App\Livewire;

use Livewire\Component;

class VehicleTypeRadio extends Component {
    public $vehicleType = '';

    // motobike
    public $trunkArea = '';
    public $engineCapacity = '';

    // truck
    public $totalWheel = '';
    public $cargoArea = '';

    // public
    public $fuelType = '';

    public function setVehicleType($vehicleType) {
        $this->vehicleType = $vehicleType;
    }

    public function render() {
        return view('livewire.vehicle-type-radio');
    }
}
