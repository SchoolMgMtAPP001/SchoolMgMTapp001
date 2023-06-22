<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreVehicalRequest;
use App\Http\Requests\UpdateVehicalRequest;
use App\Models\Vehical;
use App\Services\Vehical\VehicalService;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;
use Illuminate\View\View;

class VehicalController extends Controller
{
    public VehicalService $vehicalService;

    public function __construct(VehicalService $vehicalService)
    {
        $this->vehicalService = $vehicalService;
        $this->authorizeResource(Vehical::class);
    }

    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $this->authorize('create', [User::class, 'student']);
        return view('pages.vehical.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view('pages.vehical.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreVehicalRequest $request): RedirectResponse
    {
        $this->vehicalService->storeVehical($request->validated());

        return back()->with('success', 'Vehical Details Created Successfull');
    }

    /**
     * Display the specified resource.
     */
    public function show(Vehical $vehical): Response
    {
        abort(404);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Vehical $vehical): View
    {
        return view('pages.vehical.edit', compact('vehical'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateVehicalRequest $request, Vehical $vehical): RedirectResponse
    {
        $this->vehicalService->updateVehical($vehical, $request->validated());

        return back()->with('success', 'Vehical Details Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Vehical $vehical): RedirectResponse
    {
        $this->vehicalService->deleteVehical($vehical);

        return back()->with('success', 'Vehical Details Deleted Successfully');
    }
}
