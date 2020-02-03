<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Player extends Model
{
	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = [
		'first_name',
		'last_name',
		'date_of_birth',
		'nationality',
		'eu_passport',
		'marital_status',
		'height',
		'weight',
		'preferred_position',
		'positions',
		'current_club',
		'club_league',
		'league_level',
		'contract_expiration',
		'registration_type',
		'foot',
		'profile',
	];
	
	/**
	 * The attributes that should be cast to native types.
	 *
	 * @var array
	 */
	protected $casts = [
		'eu_passport' => 'boolean',
	];
	
	/**
	 * Get player achievements.
	 *
	 * @return \Illuminate\Database\Eloquent\Relations\HasMany
	 */
	public function achievements()
	{
		return $this->hasMany(Achievement::class, 'player');
	}
	
	/**
	 * Get player careers.
	 *
	 * @return \Illuminate\Database\Eloquent\Relations\HasMany
	 */
	public function careers()
	{
		return $this->hasMany(Career::class, 'player');
	}
	
	/**
	 * Get player photos.
	 *
	 * @return \Illuminate\Database\Eloquent\Relations\HasMany
	 */
	public function photos()
	{
		return $this->hasMany(Photo::class, 'player');
	}
}
