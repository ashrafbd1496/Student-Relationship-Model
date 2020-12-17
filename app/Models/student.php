<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class student extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function course(){
        return $this ->belongsTo(course::class, 'course_id', 'id');
    }




}
