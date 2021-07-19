<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $categories = Category::all();

        $nso = Product::where('cate_id', 1)->paginate(6);
        $nso->load('class', 'server', 'category');

        $nro = Product::where('cate_id', 2)->paginate(6);
        $nro->load('class', 'server', 'category');

        $llplk = Product::where('cate_id', 3)->paginate(6);
        $llplk->load('class', 'server', 'category');

        return view('client.index', compact('categories', 'nso', 'nro', 'llplk'));
    }

    public function category($slug)
    {
        $find = Category::where('slug', $slug)->orWhere('id', $slug)->first();

        $products = Product::where('cate_id', $find->id)->get();
        $products->load('class', 'server', 'category');

        return view('client.category', compact('products', 'slug', 'find'));
    }

    public function proDetail($id)
    {
        $p = Product::find($id);
        $p->load('class', 'server', 'category');

        return view('client.pro_detail', compact('p'));
    }
}
