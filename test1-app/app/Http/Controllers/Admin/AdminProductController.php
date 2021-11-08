<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ShopProduct;
use App\Models\Category;
use App\Http\Requests\StoreProductRequest;

class AdminProductController extends Controller
{
    protected $product;
    protected $category;

    public function __construct( ShopProduct $product , Category $category)
    {
        $this->productModel = $product;
        $this->categoryModel = $category;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = $this->productModel
        ->paginate(config('product.paginate'));
        
        return view('admin/products/index', ['products' => $products]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories =  $this->categoryModel
                ->where('is_public', 1)
                ->pluck('name', 'id')
                ->toArray();

        return view('admin.products.create',[
            'categories' => $categories
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreProductRequest $request)
    {
        $data = $request->only([
            'category_id',
            'name',
            'description',
            'price',
            'quantity',
            'price_sale',
            'status',
        ]);

        $data['category_id'] = (int) $data['category_id'];
        $data['is_public'] = isset($data['is_public']) ? (int) $data['is_public'] : 0;
        $data['user_id'] = auth()->id();
        
        try {
            $file = $request->file('image');

            if ($file) {
                $file->store('public/products');
                $data['image'] = $file->hashName();
            }

            $product = $this->productModel->create($data);
            $msg = 'Create product success.';


            return redirect()
                ->route('adminproducts.show', ['product' => $product->id])
                ->with('msg', $msg);
        } catch (\Exception $e) {
            \Log::error($e);
        }

        $error = 'Something went wrong.';

        return redirect()
            ->route('adminproducts.index')
            ->with('error', $error);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $product = $this->productModel->findOrFail($id);

        return view('admin.products.show', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = $this->productModel->findOrFail($id);

        $categories = $this->categoryModel
            ->where('is_public', 1)
            ->pluck('name', 'id')
            ->toArray();

        return view('admin.products.edit', [
            'categories' => $categories,
            'product' => $product,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $product = $this->productModel->findOrFail($id);

        $data = $request->only([
            'category_id',
            'name',
            'description',
            'price',
            'quantity',
            'price_sale',
            'status',
            'image',
        ]);

        $data['category_id'] = (int) $data['category_id'];
        $data['is_public'] = isset($data['is_public']) ? (int) $data['is_public'] : 0;
        $data['user_id'] = auth()->id();

        try {
            $file = $request->file('image');

            if ($file) {
                $file->store('public/products');
                $data['image'] = $file->hashName();
            }
            
            $product->update($data);
            $msg = 'Update product success.';

            return redirect()
                ->route('adminproducts.show', ['product' => $product->id])
                ->with('msg', $msg);
        } catch (\Exception $e) {
            \Log::error($e);
        }

        $error = 'Something went wrong.';

        return redirect()
            ->route('adminproducts.index')
            ->with('error', $error);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = $this->productModel->findOrFail($id);
        try {
            $product->delete();
            $msg = 'Delete success.';
            return redirect()
                ->route('adminproducts.index')
                ->with('msg'.$msg);
        } catch (\Exception $e) {
            \Log::error($e);
        }

        $error = 'Something went wrong.';
        
        return redirect()
                ->route('adminproducts.index')
                ->with('error'.$error);
    }

    public function search()
    {
        $product = $this->productModel->get();

        return view('admin.products.search', [
            'product' => $product
        ]);
    }

    public function searchs(Request $request)
    {
        $name = $request->only([
            'name',
            'quantity',
            'price_sale',
            
        ]);
        dd($name);
        $product = $this->productModel
            ->where('name',)
            ->get();
            
        return view('adminproducts.index', [
            'product' => $product
        ]);
    }
}
