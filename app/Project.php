<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    //
    protected $fillable = [
        'receipt_date',
        'customer_name',
        'construction_name',
        'status'
    ]
}
