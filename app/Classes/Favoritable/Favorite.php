<?php

namespace App\Classes\Favoritable;

use Illuminate\Database\Eloquent\Model as Eloquent;

class Favorite extends Eloquent
{
    protected $table = 'favoritable_favorites';
    public $timestamps = true;
    protected $fillable = ['favoritable_id', 'favoritable_type', 'user_id'];

    public function favoritable()
    {
        return $this->morphTo();
    }
}
