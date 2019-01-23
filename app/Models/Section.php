<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\User;
use App\Models\Course;
use App\Models\TimeSlot;

class Section extends Model
{
    protected $primaryKey = 'section_id';

    public function user(){
        return $this->hasMany(User::class);
    }
    public function course(){
        return $this->hasMany(Course::class);
    }
    public function timeslot(){
        return $this->hasMany(TimeSlot::class);
    }
}
