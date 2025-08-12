<?php

namespace App\Http\Controllers\Api;

use App\Http\Requests\AttachAdressProfilesFormRequest;
use App\Http\Requests\StoreUpdateAdressFormRequest;
use App\Services\AdressService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class AdressController extends CrudController
{
    public function __construct(private AdressService $service)
    {
        parent::__construct($service);
    }

    protected function beforeStore(StoreUpdateAdressFormRequest $request): JsonResponse
    {
        $request->validated();

        return $this->store($request);
    }

    protected function beforeUpdate(StoreUpdateAdressFormRequest $request, int $id): JsonResponse
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
    public function listAdresses(Request $request)
    {
        $this->service->applyFilter($request->all());
    }
}
