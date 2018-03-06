<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Seller_response extends Model
{
    protected $fillable = [
        'req_id', 'sell_name', 'sell_email', 'sell_contact', 'sel_comment'
    ];
}
