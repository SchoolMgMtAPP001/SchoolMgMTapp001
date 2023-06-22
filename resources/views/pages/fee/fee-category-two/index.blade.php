@extends('layouts.app', ['breadcrumbs' => [
    ['href'=> route('dashboard'), 'text'=> 'Dashboard'],
    ['href'=> route('fee-categories.index'), 'text'=> 'Fee Categories', 'active'],
]])

@section('title',  __('Fee Categories two'))

@section('page_heading',   __('Fee Categories two'))

@section('content', )
    @livewire('list-fee-categories-table')
@endsection