
@extends('layouts.app')

@section('content')
  <div>
    <div class="mb-14">
      @include('components.content-page-title', ['title' => 'Update Order Data'])
      @livewire('update-order-form', ['order' => $order, 'vehicles' => $vehicles])
    </div>
  </div>
@endsection
