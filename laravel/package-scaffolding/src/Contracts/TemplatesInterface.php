<?php

namespace -NAMESPACE-\-PACKAGE-\Contracts;

interface -PACKAGE--TABLENAME-Interface
{

    public function all();
    public function search($keyword);
    public function get($id);
    public function store($request);
    public function update($id, $request);
    public function delete($id);
    public function restore($id);

}
