<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Interest extends Model
{
	protected $table = 'interests';
    protected $fillable = ['resume_id','name'];
}
