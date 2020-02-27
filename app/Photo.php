<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = [
		'player', 'path',
	];
	
	/**
	 * Get photo owner.
	 *
	 * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
	 */
	public function player()
	{
		return $this->belongsTo(Player::class, 'player');
	}
}
