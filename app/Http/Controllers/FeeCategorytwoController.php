<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreFeeCategoryRequest;
use App\Http\Requests\UpdateFeeCategoryRequest;
use App\Models\FeeCategory;
use App\Services\Fee\FeeCategoryTwoService;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;
use Illuminate\View\View;

class FeeCategorytwoController extends Controller
{
    /**
     * Service instance of fee category.
     *
     * @var FeeCategoryTwoService
     */
    public FeeCategoryTwoService $feeCategorytwoService;

    public function __construct(FeeCategoryTwoService $feeCategorytwoService)
    {
        $this->authorizeResource(FeeCategoryTwo::class, 'fee_category_two');
        $this->feeCategorytwoService = $feeCategorytwoService;
    }

    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        return view('pages.fee.fee-category-two.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view('pages.fee.fee-category-two.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreFeeCategoryRequest $request): RedirectResponse
    {
        $this->feeCategorytwoService->storeFeeCategory($request->validated());

        return back()->with('success', 'Fee Category Successfully Created2');
    }

    /**
     * Display the specified resource.
     */
    public function show(FeeCategoryTwo $feeCategoryTwo): Response
    {
        abort(404);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(FeeCategoryTwo $feeCategoryTwo): View
    {
        return view('pages.fee.fee-category-two.edit', compact('feeCategory'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateFeeCategoryRequest $request, FeeCategoryTwo $feeCategoryTwo): RedirectResponse
    {
        $this->feeCategorytwoService->updateFeeCategory($feeCategoryTwo, $request->validated());

        return back()->with('success', 'Fee Category Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(FeeCategoryTwo $feeCategoryTwo): RedirectResponse
    {
        $this->feeCategorytwoService->deleteFeeCategory($feeCategoryTwo);

        return back()->with('success', 'Fee Category Deleted Successfully');
    }
}
