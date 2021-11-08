<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\ShopProduct;

class CategoryController extends Controller
{
    protected $categoryModel;
    protected $productModel;

    public function __construct(Category $category, ShopProduct $product)
    {
        $this->categoryModel = $category;
        $this->productModel = $product;
    }

    public function index()
    {
        $products = $this->productModel
                    ->paginate(config('product.paginate'));

        return view('my-theme-page.categories-page', ['products' => $products]);
    }

    public function show($id)
    {
        $category = $this->categoryModel->findOrFail($id);

        $products = $category->products()
            ->where('category_id',$id)
            ->paginate(config('product.paginate'));
            
        return view('my-theme-page.categories-page', [
            'category' => $category,
            'products' => $products,
        ]);
    }

    public function adminshow ()
    {
        $category = $this->categoryModel
                    ->get();
        
        return view('admin/category/category-index', ['category' => $category]);
    }

}
