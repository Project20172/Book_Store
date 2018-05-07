<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $table='customer';
    public $timestamp=false;
    protected $primaryKey='user_id';
}
