<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    protected $fillable=[
   "rating",
  "review",
  "user_id",
  "order_id",
  'del',
  'view_admin',
    ];
    protected $table='ratings';
}
