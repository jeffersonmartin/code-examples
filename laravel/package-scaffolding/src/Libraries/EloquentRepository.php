<?php

namespace -NAMESPACE-\-PACKAGE-\Libraries;

use -NAMESPACE-\-PACKAGE-\Contracts\RepositoryInterface;

abstract class EloquentRepository implements RepositoryInterface;
{
    /**
     *
     *   Get a collection from the resource.
     *
     *   @param array $relationships
     *   @param bool $pagination
     *
     *   @return \Illuminate\Contracts\Pagination\Paginator
     *
     */
    public function index($relationships = [], $pagination = true, $query = null)
    {
        if (!$query) {
            $query = app($this->model);
        }

        $results = $query->with($relationships)
            ->filter($this->filters());

        if ($pagination) {
            $results = $results->paginate(100)
                ->appends($this->filters()->parameters());
        } else {
            $results = $results->get();
        }

        return $results;
    }

    /**
     *
     *   Get a single model from the resource.
     *
     *   @param  string $id
     *   @param  array $relationships
     *   @param  \Illuminate\Database\Eloquent\Builder $query
     *
     *   @return \Illuminate\Database\Eloquent\Model
     *
     */
    public function get($id, $relationships = [], $query = null)
    {
        if (!$query) {
            $query = app($this->model);
        }

        return $query->with($relationships)
            ->findOrFail($id);
    }
}
