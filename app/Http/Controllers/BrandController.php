<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

use function PHPUnit\Framework\fileExists;

class BrandController extends Controller
{
        public function create()
    {
        return view('admin.brand-add');
    }

        public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'slug' => 'required|unique:categories,slug',
            'image' => 'required|image|mimes:png,jpg,svg,jpeg',
        ]);

        $brands = new Brand();
        $brands->name = $request->name;
        $brands->slug = Str::slug($request->slug);
        $brands->description = $request->description;
        $brands->status = $request->status;

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('uploads/brands/'), $imageName);
            $brands->image = $imageName;
        }

        try {
            $brands->save();
            flash()->success('Brand added successfully!');
            return redirect()->route('admin.brand');
        } catch (\Exception $e) {
            return back()->withErrors(['error' => 'An error occurred while saving the Brand.'])->withInput();
        }
    }
    public function edit($id){
        $brands = Brand::findOrFail($id);
        return view('admin.brand-edit', compact('brands'));
    }
    public function update(Request $request , $id){

        $request->validate([
            'name' => 'required|string|max:255',
            'slug' => 'required',
            'image' => 'image|mimes:png,jpg,svg,jpeg',
        ]);

        $brands = Brand::findOrFail($id);

        $brands->name = $request->name;
        $brands->description = $request->description;
        $brands->slug = Str::slug($request->slug);
        $brands->status = $request->status;

        if($request->hasFile('image')){

            $oldImage = public_path('uploads/brands/' .$brands->image);
            if(fileExists($oldImage)){
                unlink($oldImage);
            }

            $image = $request->file('image');

            $imageName = time() . '.' . $image->getClientOriginalExtension();

            $image->move(public_path('uploads/brands/'), $imageName);

            $brands->image = $imageName;

        }

        $brands->save();


        return redirect()->route('admin.brand')->with('success', 'Brand updated successfully!');
    }



    public function destroy($id){

        $categories = Brand::findOrFail($id);

        $imagePath = public_path('uploads/brands/' .$categories->image);
        if(fileExists($imagePath)){
            unlink($imagePath);
        }
        $categories->delete();
        flash()->success('Brand deleted successfully!');
        return redirect()->route('admin.brand');

    }
}
