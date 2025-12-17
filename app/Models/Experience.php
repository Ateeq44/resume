<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Experience extends Model
{
	protected $table = 'experiences';
    protected $fillable = [
        'resume_id','title','company',
        'start_date','end_date','description'
    ];
}
