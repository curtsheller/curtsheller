<?php

namespace App\Classes\Assignable;

trait AssignableControllerTrait
{
    /**
     * Assigned.
     */
    public function assigned()
    {
        $classname = 'App\\Models\\'.$this->model_name;
        $record = $classname::find(request()->get('id'));

        if ($record->assignments()) {
            $record->unassign();
            $assigned = false;
        } else {
            $record->assign();
            $assigned = true;
        }
        if (request()->ajax()) {
            return ['assigned' => $assigned, 'ID' => $record->id];
        }

        return $this->show($record);
    }

    public function isassigned()
    {
        $classname = 'App\\Models\\'.$this->model_name;
        $record = $classname::find(request()->get('id'));

        if ($record->assign()) {
            $assigned = true;
        } else {
            $assigned = false;
        }
        return response([
                'assigned' => $assigned,
                'id' => $record->id,
            ]);
    }

    public function assign($id)
    {
        $classname = 'App\\Models\\'.$this->model_name;
        $record = $classname::find($id);

        $record->assign();
    }

    public function unassign($id)
    {
        $classname = 'App\\Models\\'.$this->model_name;
        $record = $classname::find($id);

        $record->unassign();
    }

    // TESTING
    public function assignTest($id)
    {
        $classname = 'App\\Models\\'.$this->model_name;
        $record = $classname::find($id);
        // ddd($classname, $record);
        $record->assign();
    }

    public function unassignTest($id)
    {
        $classname = 'App\\Models\\'.$this->model_name;
        $record = $classname::find($id);
        $record->unassign();
    }
}
