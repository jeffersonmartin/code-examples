<?php

namespace -NAMESPACE-\-PACKAGE-\Controllers\Http\Admin;

use App\Http\Requests;
use Illuminate\Http\Request;
use -NAMESPACE-\-PACKAGE-\Libraries\HttpController;
use -NAMESPACE-\-PACKAGE-\Repositories\-PACKAGE--TABLENAME-;

class -PACKAGE--TABLENAME-Controller extends HttpController
{

    protected function -package--TABLENAME-()
    {
        return app(-PACKAGE--TABLENAME-::class);
    }

    public function index(Request $request)
    {
        // Get list of records
        $-pluralobjects- = $this->-package--TABLENAME-->all();

        return view('-package-::admin.-pluralobjects-.index', compact([
                '-pluralobjects-',
                'request'
            ]));
    }

    public function show($id)
    {
        // Find record by ID with relationships eagerloaded
        $-singularobject- = $this->-package--TABLENAME-->get($id);

        return view('-package-::admin.-pluralobjects-.show', compact([
                '-singularobject-'
            ]));
    }

    public function search($keyword)
    {
        // Search for record using keyword
        $-pluralobjects- = $this->-package--TABLENAME-->search($keyword);

        return view('-package-::admin.-pluralobjects-.search', compact([
                '-pluralobjects-'
            ]));
    }

    public function create(Request $request)
    {
        // Get list of existing record names for validation on create form
        $-pluralobjects- = $this->-package--TABLENAME-->all();

        return view('-package-::admin.-pluralobjects-.create', compact([
                '-pluralobjects-',
                'request'
            ]));
    }

    public function store(Request $request)
    {
        // Store new record in database based on request
        $-singularobject- = $this->-package--TABLENAME-->store($request);

        // Redirect to show record
        return redirect()->route('admin.-package-.settings.-pluralobjects-.show', ['id' => $-singularobject-->id]);
    }

    public function edit($id, Request $request)
    {
        // Find record by ID with relationships eager loaded
        $-singularobject- = $this->-package--TABLENAME-->get($id);

        return view('-package-::admin.-pluralobjects-.edit', compact([
                '-singularobject-',
                'request'
            ]));
    }

    public function update($id, Request $request)
    {
        // Update record in database based on request
        $-singularobject- = $this->-package--TABLENAME-->update($id, $request);

        // Redirect to show record
        return redirect()->route('admin.-package-.settings.-pluralobjects-.show', ['id' => $-singularobject-->id]);
    }

    public function delete($id)
    {
        // Soft delete record in database
        $this->-package--TABLENAME-->delete($id);

        // Redirect to all records
        return redirect()->route('admin.-package-.settings.-pluralobjects-.index');
    }

    public function restore($id)
    {
        // Restore the soft deleted record in database
        $this->-package--TABLENAME-->restore($id);

        // Redirect to show record
        return redirect()->route('admin.-package-.settings.-pluralobjects-.show', ['id' => $id]);
    }

}
