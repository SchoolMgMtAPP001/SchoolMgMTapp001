<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreFeePaymentRequest;
use App\Http\Requests\UpdateFeePaymentRequest;
use App\Models\FeePayment;
use App\Services\Fee\FeePaymentService;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;
use Illuminate\View\View;

class FeePaymentController extends Controller
{
    public FeePaymentService $feePaymentService;

    public function __construct(FeePaymentService $feePaymentService)
    {
        $this->feePaymentService = $feePaymentService;
        $this->authorizeResource(FeePayment::class);
    }

    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $this->authorize('create', [User::class, 'student']);
        return view('pages.fee.fee-payment.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view('pages.fee.fee-payment.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreFeePaymentRequest $request): RedirectResponse
    {
        $this->feePaymentService->storeFeePayment($request->validated());

        return back()->with('success', 'Fee Payment Created Successfull');
    }

    /**
     * Display the specified resource.
     */
    public function show(FeePayment $feePayment): Response
    {
        abort(404);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(FeePayment $feePayment): View
    {
        return view('pages.fee.fee-payment.edit', compact('feePayment'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateFeePaymentRequest $request, FeePayment $feePayment): RedirectResponse
    {
        $this->feePaymentService->updateFeePayment($feePayment, $request->validated());

        return back()->with('success', 'Fee Payment Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(FeePayment $feePayment): RedirectResponse
    {
        $this->feePaymentService->deleteFeePayment($feePayment);

        return back()->with('success', 'Fee Payment Deleted Successfully');
    }
}
