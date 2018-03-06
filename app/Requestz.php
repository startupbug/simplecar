<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Requestz extends Model
{
	protected $table = "requests";

	protected $fillable = [
	    'id', 'brand_id', 'req_year', 'req_style', 'req_ext_color', 'req_int_color', 'req_comment', 'model_id'
	];    
}
