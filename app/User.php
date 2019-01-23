<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Models\Course;
use App\Models\Result;
use App\Models\TimeSlot;
use App\Models\Section;

class User extends Authenticatable
{
    use Notifiable;

    protected $primaryKey = 'id';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'login_id', 'email', 'password', 'admin', 'department', 'batch',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function course(){
        return $this->hasMany(Course::class);
    }
    public function result(){
        return $this->hasMany(Result::class);
    }
    public function timeslot(){
        return $this->hasMany(TimeSlot::class);
    }
    public function section(){
        return $this->hasMany(Section::class);
    }
}
