<?php
// ~/Sites/presentation/mvc-basics/app/EventTicket.php
// Use your text editor to edit the model file and add the following code to the
// class to replace the `//` comment placeholder. The $table variable is the only
// thing you need to change when you first create your model. The other comments
// are placeholders to make it easy to work with relationships.

class EventTicket extends Model
{
    // The table associated with the model
    protected $table = 'event_tickets';

    //
    // To define a relationship, create a public function with the name of the
    // table that you are defining a foreign relationship for. For a parent
    // relationship, use a singular table name (`package_widget`). For a child
    // or many-to-many relationship, use a plural name (`package_widgets`). You
    // can then copy and paste the respective return statement in.
    //

    //
    // Parent Relationships
    // return $this->belongsTo(ForeignModel::class, 'foreign_table_id');
    //

    //
    // Child Relationships
    // return $this->hasMany(ForeignModel::class, 'this_table_id');
    //

    //
    // Distant Child Relationships (Has Many Through)
    // return $this->hasManyThrough(
    //      DistantModel::class, IntermediateModel::class,
    //      'intermediate_key_id', 'distant_key_id', 'id'
    //      );
    //

    //
    // Many-to-Many Relationships
    // return $this->belongsToMany(ForeignModel::class, 'package_this_foreign_table', 'this_table_id', 'foreign_table_id');
    //

    //
    // Scopes
    //

}