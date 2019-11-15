<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Staff extends Authenticatable
{

    use Notifiable;

    protected $guard = 'staff';

    protected $primaryKey = 'staff_id';

    protected $table = 'staff';

    protected $fillable = [

        'staff_id', 'staffName', 'staffAddress', 'password', 'staffEmail',  'staffPhoneNo', 'staffDesignation'

    ];

    protected $hidden = [
        'password', 'remember_token',
    ];

    public function equipment(){

        return $this->hasMany('App\Equipment', 'staff_id', 'staff_id');
    }

    public function booking(){

        return $this->hasMany('App\Booking', 'staff_id', 'staff_id');
    }

//    public function track(){
//
//        return $this->hasMany('App\Tracking', 'staff_id', 'staff_id');
//    }




}
