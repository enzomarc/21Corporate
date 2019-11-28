<?php
	
	namespace App;
	
	use Illuminate\Database\Eloquent\Model;
	
	class Post extends Model
	{
		/**
		 * The attributes that are mass assignable.
		 *
		 * @var array
		 */
		protected $fillable = [
			'author', 'title', 'slug', 'content', 'image', 'tags'
		];
		
		/**
		 * The attributes that should be cast to native types.
		 *
		 * @var array
		 */
		protected $casts = [
			'tags' => 'json',
		];
	}
