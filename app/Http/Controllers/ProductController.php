<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        // Get categories that are not "supplies" with their products
        $speciesCategories = \App\Models\Category::where('slug', '!=', 'supplies')
            ->with(['products' => function($q) {
                $q->where('is_active', true)
                  ->orderByRaw("FIELD(name, 'Grade A+', 'Grade A', 'Grade B', 'Standard') ASC") // Try to sort by grade if possible, but names are dynamic
                  ->orderBy('name', 'ASC');
            }])
            ->get();

        $supplies = Product::whereHas('category', function($q) {
            $q->where('slug', 'supplies');
        })->where('is_active', true)->get();

        // For the header/mega-menu if used
        $categories = \App\Models\Category::with(['products' => function($q) {
            $q->where('is_active', true)->take(6);
        }])->get();

        return view('welcome', compact('speciesCategories', 'categories', 'supplies'));
    }

    public function show($slug)
    {
        $product = Product::where('slug', $slug)->firstOrFail();
        return view('products.show', compact('product'));
    }

    /**
     * Show products for a given category slug
     */
    public function category($slug)
    {
        $category = \App\Models\Category::where('slug', $slug)->firstOrFail();
        $products = $category->products()->where('is_active', true)->with('category')->get();

        // also provide categories for the header/mega-menu
        $categories = \App\Models\Category::with(['products' => function($q) {
            $q->where('is_active', true)->take(6);
        }])->get();

        return view('categories.show', compact('category', 'products', 'categories'));
    }

    public function create()
    {
        $categories = \App\Models\Category::all();
        return view('products.create', compact('categories'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'category_id' => 'required',
            'price' => 'required|numeric',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'description' => 'nullable',
        ]);

        $productData = $request->all();
        $productData['slug'] = \Illuminate\Support\Str::slug($request->name);
        $productData['is_active'] = true;

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('products', 'public');
            $productData['image'] = 'storage/' . $imagePath;
        }

        Product::create($productData);

        return redirect()->route('product.index')->with('success', 'Product added successfully with image!');
    }
}
