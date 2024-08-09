<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use App\Http\Requests\CategoryFormRequest;

class CategoryController extends Controller
{
    public function index()
    {

        return view('admin.category.index');
    }
    public function create()
    {
        return view('admin.category.create');
    }
    public function store(CategoryFormRequest $request)
    {
        $validateData = $request->validated();

        $category = new Category;
        $category->name = $validateData['name'];
        $category->slug = Str::slug($validateData['slug']);
        $category->description = $validateData['description'];

        if($request->hasFile('image'))
        {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time().'.'.$extension;

            $file->move('uploads/category/',$filename);
            $category->image = $filename;
        }

        $category->status = $request->status == true ? '1' : '0';

        $category->meta_title = $validateData['meta_title'];
        $category->meta_keyword = $validateData['meta_keyword'];
        $category->meta_description = $validateData['meta_description'];

        $isSave = $category->save();
        if($isSave)
        {
            session()->flash('success','Category added successfully.');
        }else{
            session()->flash('error','Failed to add the category.');
        }
        return redirect('admin/category');
    }

    public function edit(int $id)
    {
        $category = Category::findOrFail($id);
        return view('admin.category.edit',["category" => $category]);
    }
    public function update(CategoryFormRequest $request, int $id)
    {
        $validateData = $request->validated();
        $category = Category::find($id);
        $category->name = $validateData['name'];
        $category->slug = $validateData['slug'];
        $category->description = $validateData['description'];

        if($request->hasFile('image'))
        {
            $path = 'uploads/category/'.$category->image;
            if(File::exists($path)){
                File::delete($path);
            }
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $file->move('uploads/category/',$filename);
            $category->image = $filename;
        }
        $category->status = $request->status == true ?  '1' : '0';
        $category->meta_title = $validateData['meta_title'];
        $category->meta_keyword = $validateData['meta_keyword'];
        $category->meta_description = $validateData['meta_description'];
        $isUpdate = $category->update();
        if($isUpdate){
            session()->flash('success','Category updated successfully.');
        }else{
            session()->flash('error','Failed to update category.');
        }
        return redirect('admin/category');
    }

    public function destroy(int $id)
    {
        $category = Category::findOrFail($id);

        $filename = $category->image;
        $imagePath = public_path('uploads/category/'.$filename);
        if(File::exists($imagePath))
        {
            File::delete($imagePath);
        }
        $isDelete = $category->delete();
        if($isDelete){
            session()->flash('success','Category deleted successfully.');
        }else{
            session()->flash('error','Failed to delete category.');
        }
        return redirect('admin/category');
    }
}
