<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\ShopProduct;
use App\Models\Order;
use App\Models\OrderProducts;
use Illuminate\Support\Facades\Mail;
use App\Mail\orderShipped;
use App\Exports\UsersExport;
use Maatwebsite\Excel\Facades\Excel;
use App\Models\UserWeb;

class OrderController extends Controller
{
    protected $categoryModel;
    protected $productModel;
    protected $orderModel;
    protected $productOrderModel;
    protected $userModel;

    public function __construct(
        Category $category, 
        ShopProduct $product,
        Order $order,
        OrderProducts $productOrder,
        UserWeb $userWeb
    ) {
        $this->categoryModel = $category;
        $this->productModel = $product;
        $this->orderModel = $order;
        $this->productOrderModel = $productOrder;
        $this->userModel = $userWeb;
    }

    public function export() 
    {
        return Excel::download(new UsersExport, 'users.xlsx');
    }

    public function saveDataToSession(Request $request)
    {
        
        $productId = (int) $request->product_id;
        $quantity = (int) $request->quantity;
        $existFlg = false;

        if (session('cart')) {
            $data['cart'] = session('cart');

            foreach ($data['cart'] as $key => $value) {
                if ($productId == $value['id']) {
                    $data['cart'][$key]['quantity'] += $quantity;
                    $existFlg = true;
                }
            }

            if (!$existFlg) {
                $data['cart'][] = [
                    'id' => $request->product_id,
                    'quantity' => $request->quantity
                ];
            }
        } else {
            $data = [
                'cart' => [
                    [
                        'id' => $request->product_id,
                        'quantity' => $request->quantity
                    ],
                ],
            ];
        }

        session($data);

        return json_encode($data);
    }

    public function removeDataFromSession(Request $request)
    {
        $productId = (int) $request->product_id;
        $cartData = session('cart');

        foreach ($cartData as $key => $productData) {
            if ($productData['id'] == $productId) {
                unset($cartData[$key]);
            }
        }

        if (is_null($cartData)) {
            session()->forget('cart');

            return json_encode([]);
        }

        $request->session()->forget('cart');
        session(['cart' => $cartData]);

        return json_encode(['cart' => $cartData]);
    }
    
    public function orderList()
    {
        $cartData = session('cart');
        $cartData = collect($cartData);

        $productData = $cartData->pluck('quantity', 'id')->toArray();
        $productIds = $cartData->pluck('id');

        $products = $this->productModel->whereIn('id', $productIds)->get();

        $subtotal = 0;
        $delivery = 30;
        foreach ($products as $product) {
            $subtotal += $product->price * $productData[$product->id] * ((100 - $product->sale_off) / 100);
        }
        $total = $subtotal + $delivery ;

        return view('my-theme-page.order-list', [
            'products' => $products,
            'productData' => $productData,
            'subtotal' => $subtotal,
            'delivery' => $delivery,
            'total'=>$total,
        ]);
    }

    public function update(Request $request)
    {
        $productId = (int) $request->product_id;
        $quantity = (int) $request->quantity;

        if (session('cart')) {
            $data['cart'] = session('cart');

            foreach ($data['cart'] as $key => $value) {
                if ($productId == $value['id']) {
                    $data['cart'][$key]['quantity'] = $quantity;
                }
            }
            session($data);

            return json_encode($data);
        }

        return json_encode(['status' => false]);
    }

    public function checkout()
    {
        $cartData = session('cart');
        $cartData = collect($cartData);

        $productData = $cartData->pluck('quantity', 'id')->toArray();
        $productIds = $cartData->pluck('id');

        $products = $this->productModel->whereIn('id', $productIds)->get();

        $subtotal = 0;
        $delivery = 30;
        foreach ($products as $product) {
            $subtotal += $product->price * $productData[$product->id] * ((100 - $product->sale_off) / 100);
        }
        $total = $subtotal + $delivery ;

        return view('my-theme-page.checkout', [
            'products' => $products,
            'productData' => $productData,
            'subtotal' => $subtotal,
            'delivery' => $delivery,
            'total'=>$total,
        ]);
    }

    public function purchase(Request $request)
    {
        $input = $request->only([
            'name',
            'phone',
            'email',
            'address',
        ]);
        
        $orderSession = session('cart');

        $totalPrice = 100;
        $code = 'JHGF100';

        $orderData = [
            'name' => $input['name'],
            'phone' => $input['phone'],
            'email' => $input['email'],
            'address' => $input['address'],
            'total_price' => $totalPrice,
            'code' => $code,
        ];
        try {
            \DB::beginTransaction();
            $order = $this->orderModel->create($orderData);

            $orderId = $order->id;

            $productOrderData = [];

            foreach ($orderSession as $product) {
                $productId = $product['id'];
                $productRecord = $this->productModel->find($productId);

                $productOrderData[] = [
                    'shop_product_id' => $productId,
                    'order_id' => $orderId,
                    'quantity' => $product['quantity'],
                    'price' => (int) $productRecord->price,
                    'sale_off' => $productRecord->sale_off,
                ];
            }
            
            $this->productOrderModel->insert($productOrderData);
        } catch (\Exception $e) {
            \Log::error($e);
            \DB::rollBack();
        }
        \DB::commit();

       session()->forget('cart');

        //Mail::to('tien1208xx@gmail.com')->send(new OrderShipped($order, $productQuantity));

        return json_encode(['status' => true]);
    }   
    public function login(Request $request)
    {
        $data = $request->only([
            'email',
            'password',
        ]);
        $user = $this->userModel->get();
        foreach ($user as $value) {
            $email= $value->email;
            $password = $value->password;
            if($email == $data["email"])
            {
                if($password == $data["password"])
                {
                    
                    $msg = "Hello $value->last_name!";
                    return redirect()
                        ->route('theme-home-page', ['user' => $user])
                        ->with('msg', $msg);
                        }
                else 
                    {
                        $error = 'The password you just entered is incorrect.';
                        return redirect()
                            ->route('theme-login-page')
                            ->with('error', $error); 
                    }
            }
            else 
                {
                    $error = 'Email name does not exist.';
                    return redirect()
                        ->route('theme-login-page')
                        ->with('error', $error); 
                }
        }
    }
}