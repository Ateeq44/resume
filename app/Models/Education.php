<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Education extends Model
{
	protected $table = 'educations';
    protected $fillable = [
        'resume_id','degree','institute','start_date','end_date'
    ];
}
