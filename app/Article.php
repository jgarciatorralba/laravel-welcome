<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    /*
        There is a lot of functionalities already available thanks to 
        the inheritance from parent class 'Model'.
    */

    // If we wanted to change de default table name in the database.
    protected $table = "articles";

    // Primary key (if we wanted to change it)
    public $primaryKey = 'id';

    // Timestamps (set to "true" by default)
    public $timestamps = true;
}
