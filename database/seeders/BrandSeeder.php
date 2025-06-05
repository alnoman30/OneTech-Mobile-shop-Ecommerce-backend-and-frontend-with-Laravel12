<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use App\Models\Brand;

class BrandSeeder extends Seeder
{
    public function run(): void
    {
        $brands = [
            ['name' => 'Apple', 'description' => 'Innovative technology and devices.', 'image' => '1748433787.jpg', 'status' => 'active'],
            ['name' => 'Samsung', 'description' => 'Smartphones, TVs, and more.', 'image' => '1748424594.jpg', 'status' => 'active'],
            ['name' => 'Sony', 'description' => 'Electronics and entertainment.', 'image' => '1748413308.jpg', 'status' => 'inactive'],
            ['name' => 'Nike', 'description' => 'Sportswear and shoes.', 'image' => '1748433787.jpg', 'status' => 'active'],
            ['name' => 'Adidas', 'description' => 'Athletic clothing and accessories.', 'image' => '1748424594.jpg', 'status' => 'active'],
            ['name' => 'Canon', 'description' => 'Cameras and imaging solutions.', 'image' => '1748413308.jpg', 'status' => 'active'],
            ['name' => 'Dell', 'description' => 'Laptops and computer accessories.', 'image' => '1748433787.jpg', 'status' => 'active'],
            ['name' => 'HP', 'description' => 'Computers and printing technology.', 'image' => '1748424594.jpg', 'status' => 'inactive'],
            ['name' => 'LG', 'description' => 'Home appliances and electronics.', 'image' => '1748413308.jpg', 'status' => 'active'],
            ['name' => 'Asus', 'description' => 'Laptops and motherboards.', 'image' => '1748433787.jpg', 'status' => 'active'],
            ['name' => 'Lenovo', 'description' => 'PCs, tablets, and accessories.', 'image' => '1748424594.jpg', 'status' => 'active'],
            ['name' => 'Microsoft', 'description' => 'Software and hardware products.', 'image' => '1748413308.jpg', 'status' => 'inactive'],
            ['name' => 'Huawei', 'description' => 'Smartphones and networking.', 'image' => '1748433787.jpg', 'status' => 'active'],
            ['name' => 'Panasonic', 'description' => 'Home and industrial electronics.', 'image' => '1748424594.jpg', 'status' => 'active'],
            ['name' => 'Reebok', 'description' => 'Athletic wear and footwear.', 'image' => '1748413308.jpg', 'status' => 'active'],
        ];

        foreach ($brands as $brand) {
            \App\Models\Brand::create([
                'name' => $brand['name'],
                'slug' => Str::slug($brand['name']),
                'description' => $brand['description'],
                'image' => $brand['image'],
                'status' => $brand['status'],
            ]);
        }
    }
}
