@extends('admin.layouts.master')
@section('counter', 'active')
@section('title', 'Counter')

@section('content')

<div class="container-xxl flex-grow-1 container-p-y">
    <div class="mb-3">
        <h4 class="fw-bold py-3 mb-4 d-inline">Counter</h4>

        <button type="button" class="btn btn-sm btn-primary mb-2 mx-2" data-bs-toggle="modal"
                data-bs-target="#createModal">
            Add Counter
        </button>

        @livewire('admin.counter.create-counter')

    </div>

    <div class="card mb-4">
        <div class="card-body">
            @livewire('admin.counter.counter-data')
        </div>
    </div>
    @livewire('admin.counter.update-counter')
    @livewire('admin.counter.delete-counter')
    @livewire('admin.counter.show-counter')
</div>
@endsection