<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreDomainRequest;
use App\Http\Requests\UpdateDomainRequest;
use App\Http\Resources\DomainCollection;
use App\Http\Resources\DomainResource;
use App\Models\Domain;
use Illuminate\Support\Facades\Cache;

class DomainController extends Controller
{
    public function index(): DomainCollection
    {
        if (!Cache::has('domains')) {
            Cache::add('domains', new DomainCollection(
                Domain::all()
            ));
        }

        return Cache::get('domains');
    }

    public function show(Domain $domain): DomainResource
    {
        return new DomainResource($domain);
    }

    public function create(): DomainResource
    {
        return new DomainResource(
            Domain::factory()->definition()
        );
    }

    public function store(StoreDomainRequest $request)
    {
        //
    }

    public function edit(Domain $domain): DomainResource
    {
        return new DomainResource($domain);
    }

    public function update(UpdateDomainRequest $request, Domain $domain): bool
    {
        return $domain->update($request->toArray());
    }

    public function destroy(Domain $domain): array
    {
        return $domain->deleteQuietly() ? [
            'type' => 'success',
            'message' => 'Domain has been quietly deleted',
        ] : [
            'type' => 'error',
            'message' => 'An error occurred while deleting the domain',
        ];
    }
}
