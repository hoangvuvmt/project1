<?php

namespace App\Http\Controllers;
use App\Services\ProductService;
use App\Http\Requests\ProductRequest;
use DB;
class ProductController extends Controller
{
    protected $productService;

    public function __construct(ProductService $productService)
    {
        $this->productService = $productService;
    }
        public function index(){
          $result =   $this->productService->getAll();
         return  view ('admin/product/list',['result'=>$result]);
        }
    public function create(ProductRequest $request)
    {

        $this->productservice->create($request);

        return back()->with(['status' => 'Post created successfully']);
    }
}

