<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\User;
use App\Models\Course;

class Result extends Model
{
    protected $primaryKey = 'result_id';
    
    public function user(){
        return $this->hasMany(User::class);
    }
    public function course(){
        return $this->hasMany(Course::class);
    }
}
