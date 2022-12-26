<?php

namespace App\Classes\Assignable;

use Illuminate\Database\Eloquent\Model as Eloquent;
use Illuminate\Support\Facades\DB as DB;

class AssignmentCounter extends Eloquent
{
    protected $table = 'assignable_assignments_counters';
    public $timestamps = false;
    protected $fillable = ['assignable_id', 'assignable_type', 'count'];

    public function assignable()
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

        $builder = Assign::query()
            ->select(DB::raw('count(*) as count, assignable_type, assignable_id'))
            ->where('assignable_type', $modelClass)
            ->groupBy('assignable_id');

        $results = $builder->get();

        $inserts = $results->toArray();

        DB::table((new static)->table)->insert($inserts);
    }
}
