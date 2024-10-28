@extends('admin.layouts.master')
@section('members', 'active')
@section('title', 'Members')

@section('content')

    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="mb-3">
            <h4 class="fw-bold py-3 mb-4 d-inline">Members</h4>

            <button type="button" class="btn btn-sm btn-primary mb-2 mx-2" data-bs-toggle="modal"
                    data-bs-target="#createModal">
                Add Members
            </button>

            @livewire('admin.member.create-member')

        </div>

        <div class="card mb-4">
            <div class="card-body">
                @livewire('admin.member.member-data')
            </div>
        </div>
        @livewire('admin.member.update-member')
        @livewire('admin.member.delete-member')
        @livewire('admin.member.show-member')
    </div>
@endsection