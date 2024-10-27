@extends('admin.layouts.master')
@section('project', 'active')
@section('title', 'project')

@section('content')

<div class="container-xxl flex-grow-1 container-p-y">
    <div class="mb-3">
        <h4 class="fw-bold py-3 mb-4 d-inline">Project</h4>

        <button type="button" class="btn btn-sm btn-primary mb-2 mx-2" data-bs-toggle="modal"
                data-bs-target="#createModal">
            Add Project
        </button>

        @livewire('admin.project.project-create')

    </div>

    <div class="card mb-4">
        <div class="card-body">
            @livewire('admin.project.project-data')
        </div>
    </div>
    @livewire('admin.project.update-project')
    @livewire('admin.project.delete-project')
    @livewire('admin.project.show-project')
</div>
@endsection