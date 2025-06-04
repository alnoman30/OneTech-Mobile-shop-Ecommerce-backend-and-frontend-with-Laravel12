<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\ChildCategory;
use App\Models\SubCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

use function PHPUnit\Framework\fileExists;

class CategoryController extends Controller
{
    public function create()
    {
        return view('admin.category.main.category-add');
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

         
        return view('admin.category.main.category-edit', compact('categories'));
    }


    public function update(Request $request , $id){

        $request->validate([
            'name' => 'required|string|max:255',
            'slug' => 'required',
            'image' => 'image|mimes:png,jpg,svg,jpeg',
        ]);

        $categories = Category::with('subcategories.childCategories')->findOrFail($id);

        $categories->name = $request->name;
        $categories->description = $request->description;
        $categories->slug = Str::slug($request->slug);
        $categories->status = $request->status;

        if($request->hasFile('image')){
            $oldImage = public_path('uploads/categories/' .$categories->image);
            if(file_exists($oldImage)){
                unlink($oldImage);
            }
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('uploads/categories/'), $imageName);
            $categories->image = $imageName;
        }

        $categories->save();

            // Cascade the status to subcategories and their child categories
            foreach ($categories->subcategories as $subcategory) {
                $subcategory->status = $categories->status;
                $subcategory->save();

                foreach ($subcategory->childCategories as $child) {
                    $child->status = $categories->status;
                    $child->save();
                }
            }

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
    // Main category add

    // Sub Category start


    public function subCat(){

        $subcategories = SubCategory::with('category')->paginate(10);
        return view('admin.category.sub.sub-category', compact('subcategories'));
    }
    public function sub_create()
    {
        $categories = Category::all();
        return view('admin.category.sub.sub-category-add', compact('categories'));
    }
    public function sub_store(Request $request)
    {
        $request->validate([
            'category_id' => 'required|exists:categories,id',
            'name' => 'required|string|max:255',
            'slug' => 'required|unique:sub_categories,slug',
        ]);

        $subcategory = new SubCategory();
        $subcategory->category_id = $request->category_id;
        $subcategory->name = $request->name;
        $subcategory->slug = Str::slug($request->slug);
        $subcategory->description = $request->description;
        $subcategory->status = $request->status;

        try {
            $subcategory->save();
            flash()->success('Sub Category added successfully!');
            return redirect()->route('admin.sub_category');
        } catch (\Exception $e) {
            return back()->withErrors(['error' => 'An error occurred while saving the Sub Category.'])->withInput();
        }
    }
        public function sub_edit(Request $request, $id){
            $subcategory = SubCategory::findOrFail($id);
            $categories = Category::all(); // for dropdown in edit form

         
        return view('admin.category.sub.sub-category-edit', compact('categories', 'subcategory'));
    }


    public function sub_update(Request $request , $id){

        $request->validate([
            'name' => 'required|string|max:255',
            'slug' => 'required',
        ]);

        $categories = SubCategory::with('childCategories')->findOrFail($id); // Eager load child categories;

        $categories->category_id = $request->category_id;
        $categories->name = $request->name;
        $categories->description = $request->description;
        $categories->slug = Str::slug($request->slug);
        $categories->status = $request->status;

    // ✅ Cascade status to child categories
        foreach ($categories->childCategories as $child) {
            $child->status = $categories->status;
            $child->save();
    }

        $categories->save();


        return redirect()->route('admin.sub_category')->with('success', 'SubCategory updated successfully!');
    }

    public function sub_destroy($id){

        $categories = SubCategory::findOrFail($id);


        $categories->delete();
        flash()->success('Sub Category deleted successfully!');
        return redirect()->route('admin.sub_category');

    }



    // Child Category
        public function childCat()
    {
        $childCategories = ChildCategory::with('subCategory')->paginate(10);
        return view('admin.category.child.child-category', compact('childCategories'));
    }

    // Show create form
    public function child_create()
    {
        $subcategories = SubCategory::all();
        return view('admin.category.child.child-category-add', compact('subcategories'));
    }

    // Store child category
    public function child_store(Request $request)
    { 
        $request->validate([
            'subcategory_id' => 'required|exists:sub_categories,id',
            'name' => 'required|string|max:255',
            'slug' => 'required|unique:child_categories,slug',
            'description' => 'nullable|string',
            'status' => 'required|in:active,inactive',
        ]);

        $child = new ChildCategory();
        $child->subcategory_id = $request->subcategory_id; 
        $child->name = $request->name;
        $child->slug = Str::slug($request->slug);
        $child->description = $request->description;
        $child->status = $request->status;

        $child->save();
        flash()->success('Child Category added successfully!');
        return redirect()->route('admin.child_category');
    }

    // Edit form
    public function child_edit($id)
    {
        $child = ChildCategory::findOrFail($id);
        $subcategories = SubCategory::all();
        return view('admin.category.child.child-category-edit', compact('child', 'subcategories'));
    }

    // Update
    public function child_update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'slug' => 'required',
        ]);

        $child = ChildCategory::findOrFail($id);
        $child->subcategory_id = $request->subcategory_id;
        $child->name = $request->name;
        $child->slug = Str::slug($request->slug);
        $child->description = $request->description;
        $child->status = $request->status;

        $child->save();
        return redirect()->route('admin.child_category')->with('success', 'Child Category updated successfully!');
    }

    // Delete
    public function child_destroy($id)
    {
        $child = ChildCategory::findOrFail($id);
        $child->delete();
        flash()->success('Child Category deleted successfully!');
        return redirect()->route('admin.child_category');
    }
}
