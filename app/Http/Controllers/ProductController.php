<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductCreateRequest;
use App\Http\Requests\ProductDeleteRequest;
use App\Http\Requests\ProductFindRequest;
use App\Http\Requests\ProductUpdateRequest;
use App\Repositories\Contracts\ProductRepositoryInterface;

class ProductController extends Controller
{
    public function __construct(protected ProductRepositoryInterface $productRepositoryInterface)
    {
        $this->productRepositoryInterface = $productRepositoryInterface;
    }
    
    public function index()
    {
        return $this->productRepositoryInterface->all();
    }

    public function show(ProductFindRequest $request)
    {
        return $this->productRepositoryInterface->find($request);
    }

    public function store(ProductCreateRequest $request)
    {
        return $this->productRepositoryInterface->create($request);
    }

    public function update(ProductUpdateRequest $request)
    {
        return $this->productRepositoryInterface->update($request);
    }

    public function destroy(ProductDeleteRequest $request)
    {
        return $this->productRepositoryInterface->delete($request);
    }


}
