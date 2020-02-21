<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
  protected $fillable = [
     'name',
     'email',
     'phone',
     'password',
     'photo',
     'total_post',
  ];
}
