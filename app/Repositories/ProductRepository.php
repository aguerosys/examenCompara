<?php

declare(strict_types=1);

namespace App\Repositories;

use App\Http\Requests\ProductCreateRequest;
use App\Http\Requests\ProductDeleteRequest;
use App\Http\Requests\ProductFindRequest;
use App\Http\Requests\ProductUpdateRequest;
use App\Models\Product;
use App\Repositories\Contracts\ProductRepositoryInterface;

class ProductRepository implements ProductRepositoryInterface
{
    public function __construct(protected Product $productModel)
    {
        $this->productModel = $productModel;
    }

    public function create(ProductCreateRequest $request)
    {
        return $this->productModel->create($request->validated());
        
    }

    public function update(ProductUpdateRequest $request)
    {
        $product = $this->productModel->find($request->id);
        $product->update($request->validated());
        return $product;
    }

    public function delete(ProductDeleteRequest $request)
    {
        return $this->productModel->destroy($request->id);
    }


    public function find(ProductFindRequest $request)
    {
        return $this->productModel->find($request->id);
    }

    public function all()
    {
        return $this->productModel->all();
    }

}
