<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MetaTag extends Model
{
    protected $fillable=[
 "home",
  "buy",
  "sell",
  "blog",
  "support",
  "legal",
  "contact",
  "myaccount",
  "orderby",
  "ordersell",
    ];
    protected $table='metaTags';
}
