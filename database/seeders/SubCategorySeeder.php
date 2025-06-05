<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use App\Models\SubCategory;
use App\Models\Category;

class SubCategorySeeder extends Seeder
{
    public function run(): void
    {
        $electronics = Category::where('name', 'Electronics')->first();
        $clothing = Category::where('name', 'Clothing')->first();
        $books = Category::where('name', 'Books')->first();

        $subcategories = [
            ['name' => 'Smartphones', 'description' => 'Mobile phones from top brands.', 'category_id' => $electronics->id ?? 1, 'status' => 'active'],
            ['name' => 'Laptops', 'description' => 'Various kinds of laptops.', 'category_id' => $electronics->id ?? 1, 'status' => 'active'],
            ['name' => 'Men\'s Wear', 'description' => 'Clothing for men.', 'category_id' => $clothing->id ?? 2, 'status' => 'active'],
            ['name' => 'Women\'s Wear', 'description' => 'Clothing for women.', 'category_id' => $clothing->id ?? 2, 'status' => 'active'],
            ['name' => 'Fiction', 'description' => 'Fictional books and novels.', 'category_id' => $books->id ?? 3, 'status' => 'inactive'],
        ];

        foreach ($subcategories as $sub) {
            SubCategory::create([
                'name' => $sub['name'],
                'slug' => Str::slug($sub['name']),
                'description' => $sub['description'],
                'category_id' => $sub['category_id'],
                'status' => $sub['status'],
            ]);
        }
    }
}
