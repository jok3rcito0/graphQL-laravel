<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Locations extends Model
{
	//protected $fillable = ['fk_user_id', 'fk_category_id', 'name', 'phone', 'website', 'regular_hours', 'special_hours', 'description', 'is_chain', 'is_publish'];
	protected $fillable = ['fk_user_id', 'name', 'phone', 'website', 'description'];

	public function user()
	{
		return $this->belongsTo(User::class, 'fk_user_id');
	}
}
