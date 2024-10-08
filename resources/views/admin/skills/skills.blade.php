@extends('admin.layouts.master')
@section('skills', 'active')
@section('title', 'Skills')

@section('content')
    <!-- Content -->
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="mb-3">
            <h4 class="fw-bold py-3 mb-4 d-inline">Skills</h4>

            <button type="button" class="btn btn-sm btn-primary mb-2 mx-2" data-bs-toggle="modal"
                    data-bs-target="#createModal">
                Add New Skills
            </button>

            @livewire('admin.skills.create-skill')

        </div>

        <div class="card mb-4">
            <div class="card-body">
                @livewire('admin.skills.skills-data')
            </div>
        </div>
        @livewire('admin.skills.update-skill')
        @livewire('admin.skills.delete-skill')
        @livewire('admin.skills.show-skill')
    </div>
    <!-- / Content -->
@endsection