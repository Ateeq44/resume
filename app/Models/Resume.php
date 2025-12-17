<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Resume extends Model
{
	protected $table = 'resumes';
	protected $fillable = [
		'full_name','email','phone','address',
		'objective', 'user_id'
	];

	public function educations() {
		return $this->hasMany(Education::class);
	}

	public function experiences() {
		return $this->hasMany(Experience::class);
	}

	public function interests() {
		return $this->hasMany(Interest::class);
	}


	public function language() {
		return $this->hasMany(Languages::class);
	}

	public function skills() {
		return $this->hasMany(Skills::class);
	}

	public function certificate() {
		return $this->hasMany(Certificates::class);
	}
}
