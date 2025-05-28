<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

use function PHPUnit\Framework\fileExists;

class CategoryController extends Controller
{
    public function create()
    {
        return view('admin.category-add');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'slug' => 'required|unique:categories,slug',
            'image' => 'required|image|mimes:png,jpg,svg,jpeg',
        ]);

        $categories = new Category();
        $categories->name = $request->name;
        $categories->slug = Str::slug($request->slug);
        $categories->description = $request->description;
        $categories->status = $request->status;

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('uploads/categories/'), $imageName);
            $categories->image = $imageName;
        }

        try {
            $categories->save();
            flash()->success('Category added successfully!');
            return redirect()->route('admin.category');
        } catch (\Exception $e) {
            return back()->withErrors(['error' => 'An error occurred while saving the Category.'])->withInput();
        }
    }
        public function edit(Request $request, $id){
        $categories = Category::findOrFail($id);

         
        return view('admin.category-edit', compact('categories'));
    }


    public function update(Request $request , $id){

        $request->validate([
            'name' => 'required|string|max:255',
            'slug' => 'required',
            'image' => 'image|mimes:png,jpg,svg,jpeg',
        ]);

        $categories = Category::findOrFail($id);

        $categories->name = $request->name;
        $categories->description = $request->description;
        $categories->slug = Str::slug($request->slug);
        $categories->status = $request->status;

        if($request->hasFile('image')){

            $oldImage = public_path('uploads/categories/' .$categories->image);
            if(fileExists($oldImage)){
                unlink($oldImage);
            }

            $image = $request->file('image');

            $imageName = time() . '.' . $image->getClientOriginalExtension();

            $image->move(public_path('uploads/categories/'), $imageName);

            $categories->image = $imageName;

        }

        $categories->save();


        return redirect()->route('admin.category')->with('success', 'Category updated successfully!');
    }

    public function destroy($id){

        $categories = Category::findOrFail($id);

        $imagePath = public_path('uploads/categories/' .$categories->image);
        if(fileExists($imagePath)){
            unlink($imagePath);
        }
        $categories->delete();
        flash()->success('Category deleted successfully!');
        return redirect()->route('admin.category');

    }
}
