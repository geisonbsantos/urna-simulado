<?php

namespace App\Http\Controllers\Api;

use App\Http\Requests\StoreUpdateAddressFormRequest;
use App\Models\Address;
use App\Services\AddressService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class AddressController extends CrudController
{
    public function __construct(private AddressService $service)
    {
        parent::__construct($service);
    }

    protected function beforeStore(StoreUpdateAddressFormRequest $request): JsonResponse
    {
        $request->validated();

        return $this->store($request);
    }

    protected function beforeUpdate(StoreUpdateAddressFormRequest $request, int $id): JsonResponse
    {
        $request->validated();

        return $this->update($request, $id);
    }

    public function restore(int $id): JsonResponse
    {
        $this->service->restore($id);

        return response()->json(['message' => 'Registro restaurado com sucesso.'], 200);
    }

    // Listar endereços
    public function listAddresses(Request $request)
    {
        // $this->service->applyFilter($request->all());
        return Address::with('users')->get();
    }
}
