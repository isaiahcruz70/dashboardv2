<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Queue extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'rep_name', 'client_name', 'business_name', 'email', 'reason', 'phone', 'message'
    ];
}
