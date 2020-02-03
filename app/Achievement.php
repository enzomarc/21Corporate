<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Achievement extends Model
{
	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = [
		'player', 'period', 'achievement',
	];
	
	/**
	 * Get achievement owner.
	 *
	 * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
	 */
	public function player()
	{
		return $this->belongsTo(Player::class, 'player');
	}
}
