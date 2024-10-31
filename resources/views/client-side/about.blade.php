@extends('client-side.layouts.master')
@section('title','About')
@section('about-active', 'active')
@section('header-content')
    @include('client-side.layouts.sub-header',['pageName' => 'About'])
@endsection
@section('content')

    @livewire('client-side.components.service-component',['count'=>3]);

    @livewire('client-side.components.skills-component');

    @livewire('client-side.components.counter-component');

    @livewire('client-side.components.member-component');

@endsection