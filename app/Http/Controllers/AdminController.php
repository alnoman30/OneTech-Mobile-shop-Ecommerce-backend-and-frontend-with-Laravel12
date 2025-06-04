<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Category;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dashboard(){
        return view('admin.dashboard');
    }

    public function category(){

        $categories = Category::latest()->paginate(10);
        return view('admin.category.main.category', compact('categories'));
    }

    public function brand(){
        $brands = Brand::paginate(10);
        return view('admin.brand', compact('brands'));
    }

}
