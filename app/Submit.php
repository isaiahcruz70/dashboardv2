<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;
class Submit extends Model
{
    protected $table = queues;
    public $timestamps =false;


    // 'date', 'rep_name', 'client_name', 'business_name', 'email', 'reason', 'phone', 'message', 'vulnerability'
}
