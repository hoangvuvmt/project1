<?php

namespace App\Services;
use Exception;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;

use Illuminate\Http\Request;
use App\Repositories\ProductRepository;

class ProductService
{
    public function __construct(ProductRepository $productRepository)
    {
        $this->productRepository = $productRepository;
    }

    public function getAll(){
        $pro = $this->productRepository->getAllProduct();
        return $pro;
    }

}

