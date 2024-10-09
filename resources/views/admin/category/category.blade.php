@extends('admin.layouts.master')
@section('categories', 'active')
@section('title', 'Categories')

@section('content')
    <!-- Content -->
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="mb-3">
            <h4 class="fw-bold py-3 mb-4 d-inline">Categories</h4>
            <button type="button" class="btn btn-sm btn-primary mb-2 mx-2" data-bs-toggle="modal"
                    data-bs-target="#createModal">
                Add Service
            </button>
            @livewire('admin.category.create-category')
        </div>

        <div class="card mb-4">
            <div class="card-body">
                @livewire('admin.category.category-data')
            </div>
        </div>
        @livewire('admin.category.delete-category')
        @livewire('admin.category.update-category')
    </div>
    <!-- / Content -->
@endsection