<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Certificates extends Model
{
    protected $table = 'certificates';
    protected $fillable = [
        'resume_id','title','institute','start_date','end_date','description',
    ];
}