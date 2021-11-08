<?php
use Illuminate\Support\Str;

if (!function_exists('showProductImage')) {
    function showProductImage($image)
    {
        if (Str::contains($image, 'http')) {
            return $image;
        }
        return asset('storage/products/' . $image);
    }
}

if (!function_exists('showCartQuantity')) {
    function showCartQuantity()
    {
        $sessionData = session('cart');
        $quantity = 0;

        if ($sessionData) {
            $quantity = count($sessionData);
        }

        return $quantity;
    }
}
