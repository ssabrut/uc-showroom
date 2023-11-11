@extends('layouts.app')

@section('content')
  <div>
    <div class="mb-14">
      @include('components.content-page-title', ['title' => 'Add New Order'])
      @livewire('order-form', ['customers' => $customers, 'vehicles' => $vehicles])
    </div>
  </div>
@endsection
