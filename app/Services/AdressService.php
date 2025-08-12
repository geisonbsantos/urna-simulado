<?php

namespace App\Services;

use App\Http\Resources\AdressCollection;
use App\Http\Resources\AdressResource;
use App\Repositories\Core\AdressRepository;
use Illuminate\Pagination\LengthAwarePaginator;

class AdressService
{
    public function __construct(
        private AdressRepository $repository
    ) {}

    public function getAll(): AdressCollection
    {
        return new AdressCollection($this->repository->getAll());
    }

    public function paginate(int $totalPage): LengthAwarePaginator
    {
        return $this->repository->paginate($totalPage);
    }

    public function findWhereFirst(string $column, string $value)
    {
        return $this->repository->findWhereFirst($column, $value);
    }

    public function applyFilter(array $data)
    {
        return $this->repository->applyFilter($data);
    }

    public function findById(int $id): AdressResource
    {
        return new AdressResource($this->repository->findById($id));
    }

    public function store(array $data): void
    {
        $this->repository->store($data);
    }

    public function update(array $request, int $id): void
    {
        $Adress = $this->findById($id);
        $this->repository->update($Adress, $request);
    }

    public function destroy(int $id): void
    {
        $Adress = $this->findById($id);
        $this->repository->destroy($Adress);
    }

    public function restore(int $id)
    {
        $this->repository->restore($id);
    }
}
