@extends('layouts.app', ['breadcrumbs' => [
    ['href'=> route('dashboard'), 'text'=> 'Dashboard'],
    ['href'=> route('vehical.index'), 'text'=> 'Vehical', 'active'],
]])

@section('title',  __('Vehical Details'))

@section('page_heading',   __('Vehical Details'))

@section('content', )
    @livewire('list-vehical-table')
@endsection