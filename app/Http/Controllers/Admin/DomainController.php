<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Domain\StoreDomainRequest;
use App\Http\Requests\Admin\Domain\UpdateDomainRequest;
use App\Models\Domain;
use Illuminate\Database\Eloquent\Collection;

class DomainController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): Collection
    {
        return Domain::all();
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreDomainRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Domain $domain)
    {
        return Domain::query()->find($domain);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Domain $slug)
    {
        return Domain::query()->find($slug);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateDomainRequest $request, Domain $domain)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Domain $domain)
    {
        //
    }
}
