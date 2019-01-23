<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\User;
use App\Models\Result;
use App\Models\TimeSlot;
use App\Models\Section;

class Course extends Model
{
    public function user(){
        return $this->hasMany(User::class);
    }
    public function result(){
    	return $this->belongsTo(Result::class);
    }

    public function timeslot(){
        return $this->hasMany(TimeSlot::class);
    }
    public function section(){
        return $this->hasMany(Section::class);
    }
}
