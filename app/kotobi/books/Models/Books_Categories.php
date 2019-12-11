<?php

namespace App\kotobi\books\Models;


use Illuminate\Database\Eloquent\Model;

class Books_Categories extends Model
{
    protected $table      = 'books_categories';
    protected $guarded    = [];
    protected $primaryKey = 'book_cat_id';
}