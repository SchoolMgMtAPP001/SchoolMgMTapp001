@extends('layouts.app', ['breadcrumbs' => [
    ['href'=> route('dashboard'), 'text'=> 'Dashboard'],
        ['href'=> route('fees.index'), 'text'=> 'Fees'],
    ['href'=> route('fee-payment.index'), 'text'=> 'Fee Payment', 'active'],
]])

@section('title',  __('Fee Payment'))

@section('page_heading',   __('Fee Payment'))

@section('content', )
    @livewire('list-fee-payment-table')
@endsection