@extends('admin.layouts.master')
@section('service', 'active')
@section('title', 'Service')

@section('content')

<div class="container-xxl flex-grow-1 container-p-y">
    <div class="mb-3">
        <h4 class="fw-bold py-3 mb-4 d-inline">Service</h4>

        <button type="button" class="btn btn-sm btn-primary mb-2 mx-2" data-bs-toggle="modal"
                data-bs-target="#createModal">
            Add Service
        </button>

        @livewire('admin.services.create-service')

    </div>

    <div class="card mb-4">
        <div class="card-body">
            @livewire('admin.services.service-data')
        </div>
    </div>
    @livewire('admin.services.update-service')
    @livewire('admin.services.delete-service')
    @livewire('admin.services.show-service')
</div>
@endsection