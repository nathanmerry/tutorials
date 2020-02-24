<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Artical extends Model
{
    // Guarded acts as a black-list, disallowing direct assignment to the columns it is provided.
    protected $guarded = [];
}
