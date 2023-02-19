<?php

namespace App\Http\Controllers;

use App\DTOs\StoreCTDDTO;
use App\Models\Cdt;
use App\Http\Requests\StoreCdtRequest;
use App\Http\Requests\UpdateCdtRequest;
use App\Services\CdtService;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;
use Illuminate\View\View;

class CdtController extends Controller
{
    public function __construct(
        public CdtService $cdtService,
    ) {
    }

    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $cdts = Cdt::all();

        return view('cdts.index', compact('cdts'));
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view('cdts.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCTDDTO $storeCTDDTO): RedirectResponse
    {
        $this->cdtService->store($storeCTDDTO);
        return back();
    }

    /**
     * Display the specified resource.
     */
    public function show(Cdt $cdt): Response
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Cdt $cdt): Response
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCdtRequest $request, Cdt $cdt): RedirectResponse
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Cdt $cdt): RedirectResponse
    {
        //
    }
}
