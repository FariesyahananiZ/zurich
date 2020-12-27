<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;

class userDetails extends Model
{
   // protected $guarded = []; or you can use
	
	protected $fillable = [
     'name',
     'phoneNum',
     'email',
     'birthdate',
     'age',
     'occupation',
     'gender',
     'address',
     'postcode',
     'city',
     'state',
     'user_id'
	];

   public function user()
    {
        return $this->belongsTo(User::class, 'foreign_key');
    }
}