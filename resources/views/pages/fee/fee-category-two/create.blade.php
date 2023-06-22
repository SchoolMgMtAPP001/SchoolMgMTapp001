@extends('layouts.app', ['breadcrumbs' => [
    ['href'=> route('dashboard'), 'text'=> 'Dashboard'],
    ['href'=> route('fee-categories.index'), 'text'=> 'Fee Categories'],
    ['href'=> route('fee-categories.create'), 'text'=> 'Create', 'active'],
]])

@section('title',  __('Create Fee Category two'))

@section('page_heading',   __('Create Fee Category two'))

@section('content', )
    @livewire('create-fee-category-two-form')
@endsection