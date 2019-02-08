<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sale extends Model
{
   protected $fillable = ['course_id','user_id','payment_gw','transaction_id','order_amount','order_status','order_error'];
}
