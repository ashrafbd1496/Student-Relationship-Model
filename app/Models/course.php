<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class course extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function student(){
        return $this->hasOne('student::class','course_id', 'id');
    }
}
