<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserProfile extends Model {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'user_profiles';

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = ['user_id', 'language', 'url_name'];

	public function user()
	{
    	return $this->belongsTo('User');
    }

}