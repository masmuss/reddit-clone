<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Community extends Model
{
	use HasFactory;

	protected $fillable = [
		'user_id',
		'name',
		'description',
		'slug',
	];

	public function user()
	{
		return $this->belongsTo(User::class);
	}

	public function posts()
	{
		return $this->hasMany(Post::class);
	}

	public function getRouteKeyName()
	{
		return 'slug';
	}
}
