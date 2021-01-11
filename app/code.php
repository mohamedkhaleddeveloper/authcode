<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class code extends Model
{
    //
    use SoftDeletes;
    protected $fillable = [
        'code', 'client_id', 'product_id', 'from' , 'to'
    ];
}
