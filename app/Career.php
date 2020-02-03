<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Career extends Model
{
	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = [
		'player', 'period', 'club', 'current_club', 'country', 'matches', 'goals',
	];
	
	protected $casts = [
		'current_club' => 'boolean'
	];
	
	/**
	 * Get career owner.
	 *
	 * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
	 */
	public function player()
	{
		return $this->belongsTo(Player::class, 'player');
	}
}
