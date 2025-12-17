<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Resume extends Model
{
	protected $table = 'resumes';
	protected $fillable = [
		'full_name','email','phone','address',
		'objective','skills','projects','languages'
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
}
