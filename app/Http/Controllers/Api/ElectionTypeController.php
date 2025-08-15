<?php

namespace App\Http\Controllers\Api;

use App\Http\Requests\StoreUpdateElectionTypeFormRequest;
use App\Models\ElectionType;
use App\Services\ElectionTypeService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class ElectionTypeController extends CrudController
{
    public function __construct(private ElectionTypeService $service)
    {
        parent::__construct($service);
    }

    protected function beforeStore(StoreUpdateElectionTypeFormRequest $request): JsonResponse
    {
        $request->validated();

        return $this->store($request);
    }

    protected function beforeUpdate(StoreUpdateElectionTypeFormRequest $request, int $id): JsonResponse
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
    public function listElectionTypes(Request $request)
    {
        // $this->service->applyFilter($request->all());
        return ElectionType::with('elections')->get();
    }
}
