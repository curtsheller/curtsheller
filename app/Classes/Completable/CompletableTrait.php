<?php

namespace App\Classes\Completable;

/**
 * Copyright (C) 2014 Robert Conner.
 */
trait CompletableTrait
{
    /**
     * Boot the soft taggable trait for a model.
     *
     * @return void
     */
    public static function bootCompletable()
    {
        if (static::removeCompletesOnDelete()) {
            static::deleting(function ($model) {
                $model->removeCompletes();
            });
        }
    }

    /**
     * Fetch records that are competed by a given user.
     * Ex: Book::whereCompletedBy(123)->get();.
     */
    public function scopeWhereCompletedBy($query, $userId = null)
    {
        if (is_null($userId)) {
            $userId = auth()->id();
        }

        return $query->whereHas('completes', function ($q) use ($userId) {
            $q->where('user_id', '=', $userId);
        });
    }

    /**
     * Populate the $model->competes attribute.
     */
    public function getCompleteCountAttribute()
    {
        return $this->completeCounter ? $this->completeCounter->count : 0;
    }

    /**
     * Collection of the competes on this record.
     */
    public function completes()
    {
        return $this->morphMany(Complete::class, 'completable');
    }

    /**
     * Counter is a record that stores the total competes for the
     * morphed record.
     */
    public function completeCounter()
    {
        return $this->morphOne(CompleteCounter::class, 'completable');
    }

    /**
     * Add a compete for this record by the given user.
     * @param $userId mixed - If null will use currently logged in user.
     */
    public function complete($userId = null)
    {
        if (is_null($userId)) {
            $userId = auth()->id();
        }

        if ($userId) {
            $complete = $this->completes()
                ->where('user_id', '=', $userId)
                ->first();

            if ($complete) {
                return;
            }

            $complete = new Complete();
            $complete->user_id = $userId;
            $this->completes()->save($complete);
        }

        $this->incrementCompleteCount();
    }

    /**
     * Remove a compete from this record for the given user.
     * @param $userId mixed - If null will use currently logged in user.
     */
    public function uncomplete($userId = null)
    {
        if (is_null($userId)) {
            $userId = auth()->id();
        }
        if ($userId) {
            $complete = $this->completes()
                ->where('user_id', '=', $userId)
                ->first();

            if (! $complete) {
                return;
            }

            $complete->delete();
        }

        $this->decrementCompleteCount();
    }

    /**
     * Has the currently logged in user already "competed" the current object.
     *
     * @param string $userId
     * @return bool
     */
    public function completed($userId = null)
    {
        if (is_null($userId)) {
            $userId = auth()->id();
        }

        return (bool) $this->completes()
            ->where('user_id', '=', $userId)
            ->count();
    }

    /**
     * Private. Increment the total compete count stored in the counter.
     */
    private function incrementCompleteCount()
    {
        $counter = $this->completeCounter()->first();

        if ($counter) {
            $counter->count++;
            $counter->save();
        } else {
            $counter = new CompleteCounter;
            $counter->count = 1;
            $this->completeCounter()->save($counter);
        }
    }

    /**
     * Private. Decrement the total compete count stored in the counter.
     */
    private function decrementCompleteCount()
    {
        $counter = $this->completeCounter()->first();

        if ($counter) {
            $counter->count--;
            if ($counter->count) {
                $counter->save();
            } else {
                $counter->delete();
            }
        }
    }

    /**
     * Did the currently logged in user compete this model
     * Example : if($book->competed) { }.
     * @return bool
     */
    public function getCompletedAttribute()
    {
        return $this->completed();
    }

    /**
     * Should remove competes on model row delete (defaults to true)
     * public static removeCompletesOnDelete = false;.
     */
    public static function removeCompletedOnDelete()
    {
        return isset(static::$removeCompletedsOnDelete)
            ? static::$removeCompletedsOnDelete
            : true;
    }

    /**
     * Delete competes related to the current record.
     */
    public function removeCompleted()
    {
        Complete::where('competable_type', $this->morphClass)->where('competable_id', $this->id)->delete();

        CompleteCounter::where('competable_type', $this->morphClass)->where('competable_id', $this->id)->delete();
    }
}
