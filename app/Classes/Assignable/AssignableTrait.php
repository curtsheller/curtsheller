<?php

namespace App\Classes\Assignable;

/**
 * Copyright (C) 2014 Robert Conner.
 */
trait AssignableTrait
{
    /**
     * Boot the soft taggable trait for a model.
     *
     * @return void
     */
    public static function bootAssignable()
    {
        if (static::removeAssignmentsOnDelete()) {
            static::deleting(function ($model) {
                $model->removeAssignments();
            });
        }
    }

    /**
     * Fetch records that are assigned to a given user.
     * Ex: Book::whereAssignedBy(123)->get();.
     */
    public function scopeWhereAssignedBy($query, $userId = null)
    {
        if (is_null($userId)) {
            $userId = auth()->id();
        }

        return $query->whereHas('assignments', function ($q) use ($userId) {
            $q->where('user_id', '=', $userId);
        });
    }

    /**
     * Populate the $model->favorites attribute.
     */
    public function getAssignmentCountAttribute()
    {
        return $this->assignCounter ? $this->assignCounter->count : 0;
    }

    /**
     * Collection of the favorites on this record.
     */
    public function assignments()
    {
        return $this->morphMany(Assignment::class, 'assignable');
    }

    /**
     * Counter is a record that stores the total favorites for the
     * morphed record.
     */
    public function assignmentCounter()
    {
        return $this->morphOne(AssignmentCounter::class, 'assignable');
    }

    /**
     * Add a assignment for this record by the given user.
     * @param $userId mixed - If null will use currently logged in user.
     */
    public function assign($userId = null)
    {
        if (is_null($userId)) {
            $userId = auth()->id();
        }

        if ($userId) {
            $assignment = $this->assignments()
                ->where('user_id', '=', $userId)
                ->first();

            if ($assignment) {
                return;
            }

            $assignment = new Assignment();
            $assignment->user_id = $userId;

            $this->assignments()->save($assignment);
        }

        $this->incrementAssignmentCount();
    }

    /**
     * Remove a favorite from this record for the given user.
     * @param $userId mixed - If null will use currently logged in user.
     */
    public function unassign($userId = null)
    {
        if (is_null($userId)) {
            $userId = auth()->id();
        }
        if ($userId) {
            $assignment = $this->assignments()
                ->where('user_id', '=', $userId)
                ->first();

            if (! $assignment) {
                return;
            }
            $assignment->delete();
        }

        $this->decrementAssignmentCount();
    }

    /**
     * Has the currently logged in user already "favorited" the current object.
     *
     * @param string $userId
     * @return bool
     */
    public function assigned($userId = null)
    {
        if (is_null($userId)) {
            $userId = auth()->id();
        }

        return (bool) $this->assignments()
            ->where('user_id', '=', $userId)
            ->count();
    }

    /**
     * Private. Increment the total favorite count stored in the counter.
     */
    private function incrementAssignmentCount()
    {
        $counter = $this->assignmentCounter()->first();

        if ($counter) {
            $counter->count++;
            $counter->save();
        } else {
            $counter = new AssignmentCounter;
            $counter->count = 1;
            $this->assignmentCounter()->save($counter);
        }
    }

    /**
     * Private. Decrement the total favorite count stored in the counter.
     */
    private function decrementAssignmentCount()
    {
        $counter = $this->AssignmentCounter()->first();
        dd($counter);

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
     * Did the currently logged in user favorite this model
     * Example : if($book->assigned) { }.
     * @return bool
     */
    public function getAssignedAttribute()
    {
        return $this->assigned();
    }

    /**
     * Should remove assignments on model row delete (defaults to true)
     * public static removeFavoritesOnDelete = false;.
     */
    public static function removeAssignedOnDelete()
    {
        return isset(static::$removeAssignmentsOnDelete)
            ? static::$removeAssignmentsOnDelete
            : true;
    }

    /**
     * Delete favorites related to the current record.
     */
    public function removeAssigned()
    {
        Assignment::where('assignable_type', $this->morphClass)->where('assignable_id', $this->id)->delete();

        AssignmentCounter::where('assignable_type', $this->morphClass)->where('assignable_id', $this->id)->delete();
    }
}
