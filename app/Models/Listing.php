<?php

namespace App\Models;

//  Laravel
use Laravel\Scout\Searchable;
use Illuminate\Database\Eloquent\Model;

//  CSP

class Listing extends Model
{

    protected $fillable = ['code', 'title',
        'available', 'private', 'premium', 'ff', 'stars',
        'address', 'city', 'region', 'country',
        'description_mini', 'description',
        'url', 'code', 'type',
        'longitude', 'latitude',
        'published', 'updated_date'];

    protected $guarded = ['id', 'created_at', 'updated_at'];

    //  The `code` is the filename field
    public static function ByCode($code)
    {
        $record = self::where('code', '=', $code)->first();

        return $record;
    }



    //  Relationships
    //
    //  TO DO: Transitioning to tags.
    public function categories()
    {
        return $this->belongsToMany(Category::class, 'listing_category', 'listing_id', 'category_id');
    }
}
