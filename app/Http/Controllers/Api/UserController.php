<?php

namespace App\Http\Controllers\Api;

use App\Http\Requests\AttachUserProfilesFormRequest;
use App\Http\Requests\StoreUpdateUserFormRequest;
use App\Services\UserService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class UserController extends CrudController
{
    public function __construct(private UserService $service)
    {
        parent::__construct($service);
    }

    protected function beforeStore(StoreUpdateUserFormRequest $request): JsonResponse
    {
        $request->validated();
        return $this->store($request);
    }

    protected function beforeUpdate(StoreUpdateUserFormRequest $request, int $id): JsonResponse
    {
        $request->validated();
        return $this->update($request, $id);
    }

    protected function storeProfiles(Request $request, int $id): JsonResponse
    {
        $this->service->storeProfiles($request->all(), $id);

        return response()->json(['message' => 'Vínculo realizado com sucesso.'], 200);
    }

    public function restore(int $id): JsonResponse
    {
        $this->service->restore($id);

        return response()->json(['message' => 'Registro restaurado com sucesso.'], 200);
    }
}
