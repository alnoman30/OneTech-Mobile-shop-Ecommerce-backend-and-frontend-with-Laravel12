<?php

namespace App\Models;
use App\Models\SubCategory;

use Illuminate\Database\Eloquent\Model;

class ChildCategory extends Model
{
        protected $fillable = [
        'subcategory_id',
        'name',
        'slug',
        'description',
        'status',
    ];
        public function subcategory()
        {
            return $this->belongsTo(SubCategory::class, 'subcategory_id');
        }
}
