<?php

namespace App\Classes\Completable;

use Illuminate\Database\Eloquent\Model as Eloquent;

class Complete extends Eloquent
{
    protected $table = 'completable_completes';
    public $timestamps = true;
    protected $fillable = ['completable_id', 'completable_type', 'user_id'];

    public function completable()
    {
        return $this->morphTo();
    }
}
