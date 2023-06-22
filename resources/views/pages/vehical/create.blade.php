@extends('layouts.app', ['breadcrumbs' => [
    ['href'=> route('dashboard'), 'text'=> 'Dashboard'],
        ['href'=> route('vehical.index'), 'text'=> 'Vehical'],
        ['href'=> route('vehical.create'), 'text'=> 'create', 'active'],
]])

@section('title',  __('Create Vehical Details'))

@section('page_heading',   __('Create Vehical Details'))

@section('content', )
    @livewire('create-vehical-form')
@endsection