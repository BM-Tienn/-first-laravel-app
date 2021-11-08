<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\Category;

class ProductController extends Controller
{
    public function products ()
    {
        $products = DB::table('shop_products')
                    ->paginate(9);

        return view('my-theme-page.products-page', ['products' => $products]);
    } 

    

    public function show ()
    {
        $products = DB::table('shop_products')
                    ->get();
        
        return view('admin/products/product-index', ['products' => $products]);
    }
    
    public function home ()
    {
        $products = DB::table('shop_products')
                    ->paginate(6);
        $categories = Category::where('is_public', config('category.public'))
                    ->get();
                    
        return view('theme-home-page', [
            'products' => $products,
            'categories' => $categories,
        ]);
    } 

    public function household ()
    {
        $products = DB::table('shop_products')
                    ->where('classify','=','HOUSEHOLD')
                    ->paginate(9);

        return view('my-theme-page.household-page', ['products' => $products]);
    }

    public function packagedfoods ()
    {
        $products = DB::table('shop_products')
                    ->where('classify','=','PACKAGEDFOODS')
                    ->paginate(9);

        return view('my-theme-page.packagedfoods-page', ['products' => $products]);
    }

    public function personalcare ()
    {
        $products = DB::table('shop_products')
                    ->where('classify','=','PERSONALCARE')
                    ->paginate(9);

        return view('my-theme-page.personalcare-page', ['products' => $products]);
    }

    public function groceries ()
    {
        $products = DB::table('shop_products')
                    ->where('classify','=','CATEGORIES')
                    ->paginate(9);

        return view('my-theme-page.groceries-page', ['products' => $products]);
    }

    public function beverages ()
    {
        $products = DB::table('shop_products')
                    ->where('classify','=','BEVERAGES')
                    ->paginate(9);

        return view('my-theme-page.beverages-page', ['products' => $products]);
    }

    public function gourmet ()
    {
        $products = DB::table('shop_products')
                    ->where('classify','=','GOURMET')
                    ->paginate(9);

        return view('my-theme-page.gourmet-page', ['products' => $products]);
    }
}

