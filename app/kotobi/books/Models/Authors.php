<?php

namespace App\kotobi\books\Models;


use Illuminate\Database\Eloquent\Model;

class Authors extends Model
{
    protected $guarded    = [];
    protected $table      = 'authors';
    protected $primaryKey = 'author_id';


}