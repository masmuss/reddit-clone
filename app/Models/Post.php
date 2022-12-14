<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
	use HasFactory, SoftDeletes;

	protected $fillable = [
		'community_id',
		'user_id',
		'title',
		'slug',
		'url',
		'description',
	];

	public function user()
	{
		return $this->belongsTo(User::class);
	}

	public function community()
	{
		return $this->belongsTo(Community::class);
	}
}
