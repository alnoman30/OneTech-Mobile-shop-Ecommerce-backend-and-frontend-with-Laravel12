<?php

namespace App\Models;
use App\Models\Category;
use App\Models\ChildCategory;

use Illuminate\Database\Eloquent\Model;

class SubCategory extends Model
{
public function category()
    {
        return $this->belongsTo(Category::class);
    }

public function childCategories()
{
    return $this->hasMany(ChildCategory::class, 'subcategory_id'); // ✅ Correct key
}
}
