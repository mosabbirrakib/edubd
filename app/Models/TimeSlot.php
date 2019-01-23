<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\User;
use App\Models\Course;
use App\Models\Section;

class TimeSlot extends Model
{
    protected $primaryKey = 'time_slot_id';

    public function user(){
        return $this->hasMany(User::class);
    }
    public function course(){
        return $this->hasMany(Course::class);
    }
    public function section(){
        return $this->hasMany(Section::class);
    }
}
