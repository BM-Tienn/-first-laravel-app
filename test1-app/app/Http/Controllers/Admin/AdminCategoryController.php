<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ShopProduct;
use App\Models\Category;

class AdminCategoryController extends Controller
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
        $categories = $this->categoryModel
        ->get();
        
        return view('admin/category/index', ['categories' => $categories]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories =  $this->categoryModel
                ->get();

        return view('admin.category.create',[
            'categories' => $categories
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->only([
            'name',
            'image',
            'classify',
            'is_public',
        ]);

        $data['is_public'] = isset($data['is_public']) ? (int) $data['is_public'] : 0;
        $data['user_id'] = auth()->id();
        
        try {
            $file = $request->file('image');

            if ($file) {
                $file->store('public/category');
                $data['image'] = $file->hashName();
            }

            $categories = $this->categoryModel->create($data);
            $msg = 'Create category success.';


            return redirect()
                ->route('admincategory.show', ['category' => $category->id])
                ->with('msg', $msg);
        } catch (\Exception $e) {
            \Log::error($e);
        }

        $error = 'Something went wrong.';

        return redirect()
            ->route('admincategory.index')
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
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $categories = $this->categoryModel->findOrFail($id);

        $categories = $this->categoryModel
            ->where('is_public', 1)
            ->pluck('name', 'id')
            ->toArray();

        return view('admin.category.edit', [
            'categories' => $categories,
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
        $categories = $this->categoryModel->findOrFail($id);

        $data = $request->only([
            'name',
            'classify',
            'image',
            'is_public',
        ]);

        $data['is_public'] = isset($data['is_public']) ? (int) $data['is_public'] : 0;
        $data['user_id'] = auth()->id();

        try {
            $file = $request->file('image');

            if ($file) {
                $file->store('public/category');
                $data['image'] = $file->hashName();
            }
            
            $category->update($data);
            $msg = 'Update product success.';

            return redirect()
                ->route('admincategory.show', ['categories' => $categories->id])
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
        //
    }
}
