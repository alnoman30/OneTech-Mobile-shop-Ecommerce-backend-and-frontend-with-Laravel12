<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\SubCategory;

class Category extends Model
{
    protected $fillable = [
        'name', 'slug', 'description', 'image', 'status',
    ];

    public function subcategories(){

        return $this->hasMany(SubCategory::class);
    }
    public function childCcategories(){

        return $this->hasMany(ChildCategory::class);
    }
}
