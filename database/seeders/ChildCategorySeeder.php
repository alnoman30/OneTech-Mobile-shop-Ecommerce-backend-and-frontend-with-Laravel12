<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use App\Models\ChildCategory;
use App\Models\SubCategory;

class ChildCategorySeeder extends Seeder
{
    public function run(): void
    {
        $smartphones = SubCategory::where('name', 'Smartphones')->first();
        $mensWear = SubCategory::where('name', 'Men\'s Wear')->first();

        $childCategories = [
            // Under Smartphones
            ['name' => 'Android Phones', 'description' => 'Phones running Android OS.', 'subcategory_id' => $smartphones->id ?? 1, 'status' => 'active'],
            ['name' => 'iPhones', 'description' => 'Apple smartphones.', 'subcategory_id' => $smartphones->id ?? 1, 'status' => 'active'],
            ['name' => 'Gaming Phones', 'description' => 'High performance phones for gaming.', 'subcategory_id' => $smartphones->id ?? 1, 'status' => 'inactive'],

            // Under Men's Wear
            ['name' => 'Formal Shirts', 'description' => 'Shirts for office and formal events.', 'subcategory_id' => $mensWear->id ?? 2, 'status' => 'active'],
            ['name' => 'Casual T-Shirts', 'description' => 'Everyday wear t-shirts.', 'subcategory_id' => $mensWear->id ?? 2, 'status' => 'active'],
        ];

        foreach ($childCategories as $child) {
            ChildCategory::create([
                'name' => $child['name'],
                'slug' => Str::slug($child['name']),
                'description' => $child['description'],
                'subcategory_id' => $child['subcategory_id'],
                'status' => $child['status'],
            ]);
        }
    }
}
