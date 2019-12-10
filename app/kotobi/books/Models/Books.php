<?php

namespace App\kotobi\books\Models;


use Illuminate\Database\Eloquent\Model;

class Books extends Model
{
    protected $table      = 'books';
    protected $guarded    = [];
    protected $primaryKey = 'book_id';

}