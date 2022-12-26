<?php

namespace App\Classes\Assignable;

use Illuminate\Database\Eloquent\Model as Eloquent;

class Assignment extends Eloquent
{
    protected $table = 'assignable_assignments';
    public $timestamps = true;
    protected $fillable = ['assignable_id', 'assignable_type', 'user_id'];

    public function assignable()
    {
        return $this->morphTo();
    }
}
