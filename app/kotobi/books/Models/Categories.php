<?php

namespace App\kotobi\books\Models;

use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{
    protected $table='categories';
    protected $guarded=[];
    protected $primaryKey='cat_id';
}
