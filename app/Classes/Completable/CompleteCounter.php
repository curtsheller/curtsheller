<?php

namespace App\Classes\Completable;

use Illuminate\Database\Eloquent\Model as Eloquent;
use Illuminate\Support\Facades\DB as DB;

class CompleteCounter extends Eloquent
{
    protected $table = 'completable_completes_counters';
    public $timestamps = false;
    protected $fillable = ['completable_id', 'completeable_type', 'count'];

    public function completeable()
    {
        return $this->morphTo();
    }

    /**
     * Delete all counts of the given model, and recount them and insert new counts.
     *
     * @param string $model (should match Model::$morphClass)
     */
    public static function rebuild($modelClass)
    {
        if (empty($modelClass)) {
            throw new \Exception('$modelClass cannot be empty/null. Maybe set the $morphClass variable on your model.');
        }

        $builder = Complete::query()
            ->select(DB::raw('count(*) as count, completable_type, completeable_id'))
            ->where('completeable_type', $modelClass)
            ->groupBy('completeable_id');

        $results = $builder->get();

        $inserts = $results->toArray();

        DB::table((new static)->table)->insert($inserts);
    }
}
