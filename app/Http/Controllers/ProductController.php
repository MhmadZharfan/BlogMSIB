<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product; // Pastikan ini diimpor
use Illuminate\Support\Facades\Validator;

class ProductController extends Controller
{
    // Fungsi untuk mendapatkan semua produk dengan filter kategori
    public function getAllProducts(Request $request)
    {
        $category = $request->query('category');
        $products = Product::query();

        if ($category) {
            $products->where('category', $category);
        }

        return response()->json($products->get());
    }

    // Fungsi untuk mencari produk berdasarkan nama
    public function searchProductsByName(Request $request)
    {
        $keyword = $request->query('name');
        $products = Product::where('name', 'LIKE', '%' . $keyword . '%')->get();

        return response()->json($products);
    }
}
