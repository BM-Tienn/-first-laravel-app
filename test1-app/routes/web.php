<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SingleController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\Admin\AdminProductController;
use App\Http\Controllers\Admin\AdminCategoryController;
use App\Http\Controllers\UserWebController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/you_name/{name?}', function ($name = 'Tien') {
    return 'hello ' . $name;
});

require __DIR__.'/auth.php';



Route::get('/form', function(){
    return view('view');
});
//route form get
Route::get('/formget', function (Request $request) {
    return view('view', ['data' => $request->all()]);
});
//route form post
Route::post('/formpost', function (Request $request) {
    return view('view', ['data' => $request->all()]);
});
/*group 
Route::group(['admin'], function() {
    Route::get('/select', function () {
        return 'select database';
    });
    Route::get('/edit', function () {
        return 'Edit database';
    });
    Route::get('/delete', function () {
        return 'Delete database';
    });
});
*/

Route::get('/user/{id}', function (Request $request, $id) {
    return 'User '.$id;
});

Route::get('/view', function() {
    return view('view');
});

Route::get('/test', function (Request $request) {
    return view('view', ['request'=> $request->all()]);
});

Route::get('/view2', function () {
    if (View::exists('emails.customer')) {
        return view('view2', ['name' => 'Tien']);
    }

    if (View::exists('emails.customer') == false) {
        return view('view2', ['name' => 'James']);
    }

    
});

use Illuminate\Support\Facades\View;

Route::get('/views', function () {
    return view('view2')
                ->with('name', 'Victoria')
                ->with('occupation', 'Astronaut');
});

//route view component
Route::get('/home-page', function() {
    if (View::exists('index')) {
        return view('index');
    }
    return view('home-page');
})->name('home-page');

Route::get('/service-page', function() {
    return view('my-layouts-page.service-page');
})->name('service-page');

Route::get('/about-page', function() {
    return view('my-layouts-page.about-page');
})->name('about-page');

Route::get('/contact-page', function() {
    return view('my-layouts-page.contact-page');
})->name('contact-page');

//themes page
Route::get('/theme-contact-page', function() {
    return view('my-theme-page.contact-page');
})->name('theme-contact-page');

Route::get('/theme-offers-page', function() {
    return view('my-theme-page.offers-page');
})->name('theme-offers-page');

Route::get('/theme-login-page', function() {
    return view('my-theme-page.login-page');
})->name('theme-login-page');

Route::get('/theme-registered-page', function() {
    return view('my-theme-page.registered-page');
})->name('theme-registered-page');

Route::get('/theme-faq-page', function() {
    return view('my-theme-page.faq-page');
})->name('theme-faq-page');

Route::get('/theme-checkout-page', function() {
    return view('my-theme-page.checkout-page');
})->name('theme-checkout-page');

Route::get('/theme-short-codes-page', function() {
    return view('my-theme-page.short-codes-page');
})->name('theme-short-codes-page');

Route::get('/theme-about-page', function() {
    return view('my-theme-page.about-page');
})->name('theme-about-page');
/*
Route::get('/theme-home-page', function() {
    if (View::exists('index')) {
        return view('index');
    }
    return view('theme-home-page');
})->name('theme-home-page');

Route::get('/theme-groceries-page', function() {
    return view('my-theme-page.groceries-page');
})->name('theme-groceries-page');

Route::get('/theme-household-page', function() {
    return view('my-theme-page.household-page');
})->name('theme-household-page');

Route::get('/theme-personalcare-page', function() {
    return view('my-theme-page.personalcare-page');
})->name('theme-personalcare-page');

Route::get('/theme-packagedfoods-page', function() {
    return view('my-theme-page.packagedfoods-page');
})->name('theme-packagedfoods-page');

Route::get('/theme-beverages-page', function() {
    return view('my-theme-page.beverages-page');
})->name('theme-beverages-page');

Route::get('/theme-gourmet-page', function() {
    return view('my-theme-page.gourmet-page');
})->name('theme-gourmet-page');

Route::get('/theme-products-page', function() {
    return view('my-theme-page.products-page');
})->name('theme-products-page');

Route::get('/theme-single-page', function() {
    return view('my-theme-page.single-page');
})->name('theme-single-page');
*/

//controller
Route::get('/theme-home-page', [ProductController::class, 'home'])->name('theme-home-page');

Route::get('/theme-products-page', [ProductController::class, 'products'])->name('theme-products-page');

Route::get('/theme-single-page/{id}', [SingleController::class, 'show'])->name('theme-single-page');

Route::get('/theme-products-page/{id}', [ProductController::class, 'page'])->name('theme-product-page');

Route::get('/theme-household-page', [ProductController::class, 'household'])->name('theme-household-page');

Route::get('/theme-personalcare-page', [ProductController::class, 'personalcare'])->name('theme-personalcare-page');

Route::get('/theme-packagedfoods-page', [ProductController::class, 'packagedfoods'])->name('theme-packagedfoods-page');

Route::get('/theme-groceries-page', [ProductController::class, 'groceries'])->name('theme-groceries-page');

Route::get('/theme-gourmet-page', [ProductController::class, 'gourmet'])->name('theme-gourmet-page');

Route::get('/theme-beverages-page', [ProductController::class, 'beverages'])->name('theme-beverages-page');

Route::get('/theme-categories-page/{id}', [CategoryController::class, 'show'])->name('theme-categories-page.show');

Route::get('/theme-categories-page', [CategoryController::class, 'index'])->name('theme-categories-page');

//admin
Route::name('admin')->prefix('admin')->group(function () {
    Route::resource('products',AdminProductController::class);
    Route::resource('/category',AdminCategoryController::class);
    
    Route::get('/search',[AdminProductController::class, 'search'])->name('search');
    Route::get('/searchs',[AdminProductController::class, 'searchs'])->name('searchs');
    
});
use App\Http\Controllers\OrderController;
Route::post('add-to-cart', [OrderController::class, 'saveDataToSession'])->name('order.save');
Route::get('/order.list', [OrderController::class, 'orderList'])->name('order.list');
Route::post('remove-product', [OrderController::class, 'removeDataFromSession'])->name('order.remove');
Route::put('order-update', [OrderController::class, 'update'])->name('order.update');
Route::get('checkout', [OrderController::class, 'checkout'])->name('order.checkout');
Route::post('purchase', [OrderController::class, 'purchase'])->name('order.purchase');
Route::get('users/export/', [OrderController::class, 'export']);
Route::resource('userweb',UserWebController::class);
Route::post('login',[OrderController::class, 'login'])->name('order.login');