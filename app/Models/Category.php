<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //
    //  Relationships
    //
    public function listings()
    {
        return $this->belongsToMany(Listing::class, 'listing_category', 'category_id', 'listing_id');
    }
}
