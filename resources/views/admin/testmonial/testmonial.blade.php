@extends('admin.layouts.master')
@section('testimonial', 'active')
@section('title', 'testimonial')

@section('content')

<div class="container-xxl flex-grow-1 container-p-y">
    <div class="mb-3">
        <h4 class="fw-bold py-3 mb-4 d-inline">Testimonial</h4>

        <button type="button" class="btn btn-sm btn-primary mb-2 mx-2" data-bs-toggle="modal"
                data-bs-target="#createModal">
            Add Testimonial
        </button>

        @livewire('admin.testmonial.create-testmonial')

    </div>

    <div class="card mb-4">
        <div class="card-body">
            @livewire('admin.testmonial.testmonial-data')
        </div>
    </div>
    @livewire('admin.testmonial.update-testmonial')
    @livewire('admin.testmonial.delete-testmonial')
    @livewire('admin.testmonial.show-testmonial')
</div>
@endsection