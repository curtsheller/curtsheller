<?php

namespace App\Classes\Favoritable;

use App\Models\Asset;

/**
 * Copyright (C) 2014 Robert Conner.
 */
trait FavoritableControllerTrait
{
    /**
     * Like and Favorite functions.
     */
    public function favorited()
    {
        $classname = 'App\\Models\\'.$this->model_name;
        $record = $classname::find(request()->get('id'));

        if ($record->favorite()) {
            $record->unfavorite();
            $favorited = false;
        } else {
            $record->favorite();
            $favorited = true;
        }
        if (request()->ajax()) {
            return ['favorited' => $favorited, 'ID' => $record->id];
        }

        return $this->show($record);
    }

    public function isfavorited()
    {
        $classname = 'App\\Models\\'.$this->model_name;
        $record = $classname::find(request()->get('id'));

        if ($record->favorite()) {
            $favorited = true;
        } else {
            $favorited = false;
        }

        return response([
                'favorited' => $favorited,
                'id' => $record->id,
            ]);
    }

    public function favorite($id)
    {
        $classname = 'App\\Models\\'.$this->model_name;
        $record = $classname::find($id);

        $record->favorite();
    }

    public function unFavorite($id)
    {
        $classname = 'App\\Models\\'.$this->model_name;
        $record = $classname::find($id);

        $record->unfavorite();
    }
}
