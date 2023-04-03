<?php

namespace App\Http\Controllers;
use App\Models\Category;
use App\Models\Product;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;

class ProductController extends Controller
{
    public function product(Product $product, $categoryId = 0)
    {

        return view('product', [
            'product' => $product,

        ]);

    }

    public function products($categoryId = 0)
    {
        $products = Product::query()->where('is_active', 1)->latest();


        if ($categoryId) {
            $products->where('category_id', $categoryId);
        }

        return view('products', [
            'products' => $products->get(),


        ]);

    }



}

