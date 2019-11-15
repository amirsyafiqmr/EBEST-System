<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Customer extends Authenticatable
{

    use Notifiable;

    protected $guard = 'customer';

    protected $primaryKey = 'cust_id';

    protected $table = 'customer';

    protected $fillable = [

        'cust_id', 'name', 'email', 'password', 'address',  'phoneNo', 'gender', 'companyName', 'companyAddress', 'companyPhoneNo', 'companyEmail'

    ];

    protected $hidden = [
        'password', 'remember_token',
    ];


    public function booking(){

        return $this->hasMany('App\Booking', 'cust_id', 'cust_id');
    }

//    public function track(){
//
//        return $this->hasMany('App\Tracking', 'cust_id', 'cust_id');
//    }
}
