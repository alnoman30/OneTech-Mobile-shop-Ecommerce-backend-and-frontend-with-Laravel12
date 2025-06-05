<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
    $categories = [
            ['name' => 'Electronics', 'description' => 'Electronic gadgets and devices.', 'image' => '1748433787.jpg', 'status' => 'active'],
            ['name' => 'Clothing', 'description' => 'Fashion for men, women, and kids.', 'image' => '1748424594.jpg', 'status' => 'active'],
            ['name' => 'Books', 'description' => 'Fiction, non-fiction, and educational books.', 'image' => '1748413308.jpg', 'status' => 'inactive'],
            ['name' => 'Furniture', 'description' => 'Home and office furniture.', 'image' => '1748433787.jpg', 'status' => 'active'],
            ['name' => 'Toys', 'description' => 'Toys for children of all ages.', 'image' => '1748424594.jpg', 'status' => 'active'],
            ['name' => 'Sports', 'description' => 'Sportswear and equipment.', 'image' => '1748413308.jpg', 'status' => 'active'],
            ['name' => 'Beauty', 'description' => 'Beauty and personal care products.', 'image' => '1748433787.jpg', 'status' => 'active'],
            ['name' => 'Watches', 'description' => 'Luxury and casual watches.', 'image' => '1748424594.jpg', 'status' => 'inactive'],
            ['name' => 'Shoes', 'description' => 'Footwear for all seasons.', 'image' => '1748413308.jpg', 'status' => 'active'],
            ['name' => 'Groceries', 'description' => 'Everyday grocery items.', 'image' => '1748424594.jpg', 'status' => 'active'],
            ['name' => 'Mobile Phones', 'description' => 'Smartphones and accessories.', 'image' => '1748413308.jpg', 'status' => 'active'],
            ['name' => 'Laptops', 'description' => 'Laptops for personal and professional use.', 'image' => '1748424594.jpg', 'status' => 'active'],
            ['name' => 'Cameras', 'description' => 'Digital and DSLR cameras.', 'image' => '1748413308.jpg', 'status' => 'inactive'],
            ['name' => 'Gaming', 'description' => 'Consoles, games, and accessories.', 'image' => '1748433787.jpg', 'status' => 'active'],
            ['name' => 'Kitchen Appliances', 'description' => 'Appliances for a modern kitchen.', 'image' => '1748433787.jpg', 'status' => 'active'],
        ];

            foreach ($categories as $category) {
                Category::create([
                    'name' => $category['name'],
                    'slug' => Str::slug($category['name']),
                    'description' => $category['description'],
                    'image' => $category['image'],
                    'status' => $category['status'],
                ]);
            }
    }
}
