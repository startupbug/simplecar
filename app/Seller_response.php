<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Auth;

class Seller_response extends Model
{
    protected $fillable = [
        'req_id', 'user_id', 'offer', 'sel_comment',
    ];

    public static function isOffered($request_id){
    	return Seller_response::where('req_id', $request_id)->where('user_id', Auth::user()->id)->exists();
    }
}
