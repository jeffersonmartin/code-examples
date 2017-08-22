<?php

namespace -NAMESPACE-\-PACKAGE-\Libraries;

use Illuminate\Database\Eloquent\SoftDeletes;
use Ramsey\Uuid\Uuid;
use Illuminate\Database\Eloquent\Model as EloquentModel;
// use -NAMESPACE-\Account\Models\AccountUser;

class Model extends EloquentModel
{

    use SoftDeletes;

    // Disable auto incrementing primary keys since we use UUIDs
    public $incrementing = false;

    // Mutate the following fields to timestamp format
    protected $dates = ['deleted_at'];

    // Hide these fields from arrays
    protected $hidden = ['created_at','updated_at','deleted_at'];

    // Run whenever a new model is instantiated
    protected static function boot()
    {
        parent::boot();

        // Attach to the 'creating' Model Event to provide a UUID
        // for the `id` field (provided by $model->getKeyName())
        static::creating(function ($model) {
            $model->{$model->getKeyName()} = (string)$model->generateNewId();
        });
    }

    // Get a new version 4 (random) UUID.
    public function generateNewId()
    {
        return Uuid::uuid4();
    }

    //
    // Relationships for Account User responsible for created_at, updated_at
    // and deleted_at timestamps.
    //

    /*
    public function created_by_user()
    {
        return $this->belongsTo(AccountUser::class, 'created_by');
    }

    public function updated_by_user()
    {
        return $this->belongsTo(AccountUser::class, 'updated_by');
    }

    public function deleted_by_user()
    {
        return $this->belongsTo(AccountUser::class, 'deleted_by');
    }
    */

}
