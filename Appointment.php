<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    protected $fillable = ['date', 'time', 'stylist_name', 'service_type'];

    protected $dates = ['date'];
}
