<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $data['category'] = Category::all()->toArray();
        return view('admin.category.index',$data);
    }
    public function create()
    {
        return view('admin.category.create');
    }
}
