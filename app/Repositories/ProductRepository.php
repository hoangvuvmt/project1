<?php

namespace App\Repositories;

use App\Models\Product;

class ProductRepository
{

    protected $product;

    public function __construct(Product $product)
    {
        $this->product = $product;
    }
    public function getAllProduct(){
        return $this->product->get();
    }
    // public function getAll(){
    //     return $this->product->
    // }
    // public function create($attributes)
    // {
    //     return $this->product->create($attributes);
    // }

    // public function insert(array $values)
    // {
    //     return $this->tag->insert($values);
    // }


}
