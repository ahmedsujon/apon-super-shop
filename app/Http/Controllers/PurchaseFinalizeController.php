<?php

namespace App\Http\Controllers;

use App\Unit;
use App\Brands;
use App\Product;
use App\TaxRate;
use App\Category;
use App\Warranty;
use App\BusinessLocation;
use App\SellingPriceGroup;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PurchaseFinalizeController extends Controller
{
    public function index(Request $request)
    {
        $purchases = Product::join('purchase_lines', 'purchase_lines.product_id', 'products.id')->where('purchase_lines.finalized', 0)->select('products.id as product_id', 'products.image as product_image', 'products.name as product_name', 'purchase_lines.*')->get();

        return view('purchase_finalize.index', compact('purchases'));
    }

    // public function finalizeProduct(Request $request)
    // {
    //     $id = $request->product_id;

    //     $business_id = request()->session()->get('user.business_id');
    //     $categories = Category::forDropdown($business_id, 'product');
    //     $brands = Brands::forDropdown($business_id);

    //     $tax_dropdown = TaxRate::forBusinessDropdown($business_id, true, true);
    //     $taxes = $tax_dropdown['tax_rates'];
    //     $tax_attributes = $tax_dropdown['attributes'];


    //     $product = Product::where('business_id', $business_id)
    //                         ->with(['product_locations'])
    //                         ->where('id', $id)
    //                         ->firstOrFail();

    //     $default_profit_percent = request()->session()->get('business.default_profit_percent');

    //     return view('purchase_finalize.product-finalize')
    //             ->with(compact('product', 'default_profit_percent'));
    // }
}
