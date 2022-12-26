<?php

namespace App\Classes\Favoritable;

use Illuminate\Database\Eloquent\Model as Eloquent;
use Illuminate\Support\Facades\DB as DB;

class FavoriteCounter extends Eloquent
{
    protected $table = 'favoritable_favorites_counters';
    public $timestamps = false;
    protected $fillable = ['favoritable_id', 'favoritable_type', 'count'];

    public function favoritable()
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

        $builder = Favorite::query()
            ->select(DB::raw('count(*) as count, favoritable_type, favoritable_id'))
            ->where('favoritable_type', $modelClass)
            ->groupBy('favoritable_id');

        $results = $builder->get();

        $inserts = $results->toArray();

        DB::table((new static)->table)->insert($inserts);
    }
}
