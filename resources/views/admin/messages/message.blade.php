@extends('admin.layouts.master')
@section('messages', 'active')
@section('title', 'Message')

@section('content')

    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="mb-3">
            <h4 class="fw-bold py-3 mb-4 d-inline">Messages</h4>
        </div>

        <div class="card mb-4">
            <div class="card-body">
                @livewire('admin.messages.message-data')
            </div>
        </div>
        @livewire('admin.messages.delete-message')
        @livewire('admin.messages.show-message')
    </div>
@endsection