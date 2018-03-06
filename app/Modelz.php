<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Modelz extends Model
{
	protected $table = "models";

	protected $fillable = [
	    'model_name', 'brand_Id', 'year', 'style', 'ext_color', 'int_color', 'comment', 'car_image'
	];
}
