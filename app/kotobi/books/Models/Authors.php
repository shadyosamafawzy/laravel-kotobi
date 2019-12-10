<?php

namespace App\kotobi\books\Models;


use Illuminate\Database\Eloquent\Model;

class Authors extends Model
{
    protected $table      = 'authors';
    protected $guarded    = [];
    protected $primaryKey = 'author_id';


}