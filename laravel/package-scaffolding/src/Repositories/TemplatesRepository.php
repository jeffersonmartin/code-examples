<?php

namespace -NAMESPACE-\-PACKAGE-\Repositories;

use -NAMESPACE-\-PACKAGE-\Models\-MODELNAME-;
use -NAMESPACE-\-PACKAGE-\Contracts\-PACKAGE--TABLENAME-Interface;

class -PACKAGE--TABLENAME- implements -PACKAGE--TABLENAME-Interface {

    public function all()
    {
        // Get list of records
        $-pluralobjects- = -MODELNAME-::with([
            //
            ])->orderBy('-singularobject-_name')
            ->get();

        return $-pluralobjects-;
    }

    public function search($keyword)
    {
        // Search for records using keyword
        $-pluralobjects- = -MODELNAME-::with([
            //
            ])->where('id', $keyword)
            ->orWhere('-singularobject-_name', 'LIKE', "%$keyword%")
            ->orderBy('-singularobject-_name')
            ->get();

        return $-pluralobjects-;
    }

    public function get($id)
    {
        // Find record by ID
        $-singularobject- = -MODELNAME-::with([
            //
            ])->withTrashed()
            ->findOrFail($id);

        return $-singularobject-;
    }

    public function store($request)
    {
        // Instantiate model for creating new row
        $-singularobject- = new -MODELNAME-;

        // Define foreign key relationships

        // Define new database row fields based on form request
        isset($request['-singularobject-_name']) ? $-singularobject-->-singularobject-_name = $request['-singularobject-_name'] : '';

        // Save row in database
        $-singularobject-->save();

        return $-singularobject-;
    }

    public function update($id, $request)
    {
        // Instantiate model for updating row
        $-singularobject- = -MODELNAME-::findOrFail($id);

        // Define new database row fields based on form request
        isset($request['-singularobject-_name']) ? $-singularobject-->-singularobject-_name = $request['-singularobject-_name'] : '';

        // Save row in database
        $-singularobject-->save();

        return $-singularobject-;
    }

    public function delete($id)
    {
        // Instantiate model for updating row
        $-singularobject- = -MODELNAME-::findOrFail($id);

        // Soft delete the row
        $-singularobject-->delete();
    }

    public function restore($id)
    {
        // Instantiate model for updating row
        $-singularobject- = -MODELNAME-::withTrashed()->findOrFail($id);

        // Restore the soft deleted row
        $-singularobject-->restore();
    }

}