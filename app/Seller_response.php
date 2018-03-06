<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Seller_response extends Model
{
    protected $fillable = [
        'req_id', 'user_id', 'offer', 'sel_comment',
    ];
}
