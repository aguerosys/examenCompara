<?php

declare(strict_types=1);

namespace App\Repositories\Contracts;
use App\Http\Requests\ProductCreateRequest;
use App\Http\Requests\ProductDeleteRequest;
use App\Http\Requests\ProductFindRequest;
use App\Http\Requests\ProductUpdateRequest;


interface ProductRepositoryInterface
{
  
    public function create(ProductCreateRequest $request);

    public function update(ProductUpdateRequest $request);

    public function delete(ProductDeleteRequest $request);

    public function find(ProductFindRequest $request);

    public function all();

    
}
