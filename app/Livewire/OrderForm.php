<?php

namespace App\Livewire;

use Livewire\Component;

class OrderForm extends Component {
    public $customers;
    public $vehicles;
    public $selectedCustomer = 0;

    public function mount($customers, $vehicles) {
        $this->customers = $customers;
        $this->vehicles = $vehicles;
    }

    public function updatedSelectedCustomer($customerId) {
    }

    public function render() {
        return view('livewire.order-form');
    }
}
