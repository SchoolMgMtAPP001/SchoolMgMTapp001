@extends('layouts.app', ['breadcrumbs' => [
    ['href'=> route('dashboard'), 'text'=> 'Dashboard'],
    ['href'=> route('fee-payment.index'), 'text'=> 'Fee Payment'],
    ['href'=> route('fee-payment.edit', $feePayment>id), 'text'=> "Edit $feePayment->name", 'active'],
]])

@section('title',  __("Edit $feePayment->name"))

@section('page_heading',   __("Edit $feePayment->name"))

@section('content', )
    @livewire('edit-fee-payment-form',['feePayment' => $feePayment])
@endsection