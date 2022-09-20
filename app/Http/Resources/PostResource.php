<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class PostResource extends JsonResource
{
	/**
	 * Transform the resource into an array.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
	 */
	public function toArray($request)
	{
		return [
			"id" => $this->id,
			"title" => $this->title,
			"slug" => $this->slug,
			"url" => $this->url,
			"description" => $this->description,
			"created_at" => $this->created_at->diffForHumans(),
			"user" => [
				"name" => $this->user->name,
			],
			"community" => [
				"name" => $this->community->name,
				"slug" => $this->community->slug,
			],
		];
	}
}
