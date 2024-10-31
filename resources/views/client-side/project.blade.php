@extends('client-side.layouts.master')
@section('title','Projects')
@section('project-active', 'active')
@section('header-content')
    @include('client-side.layouts.sub-header',['pageName' => 'Projects'])
@endsection
@section('content')

    @livewire('client-side.components.project-component');

@endsection