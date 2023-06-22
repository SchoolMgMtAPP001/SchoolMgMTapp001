@extends('layouts.app', ['breadcrumbs' => [
    ['href'=> route('dashboard'), 'text'=> 'Dashboard'],
    ['href'=> route('fees.index'), 'text'=> 'Fees'],
    ['href'=> route('fee-payment.index'), 'text'=> 'Fee Payment'],
    ['href'=> route('fee-payment.create'), 'text'=> 'Create', 'active'],
]])

@section('title',  __('Create Fee Payment'))

@section('page_heading',   __('Create Fee Payment'))

@section('content', )
    @livewire('create-fee-payment-form')
@endsection