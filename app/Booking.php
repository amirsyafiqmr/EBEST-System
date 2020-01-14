<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    protected $primaryKey = 'book_id';

    protected $table = 'booking';

    protected $fillable = [

        'book_id', 'venue', 'eventDate', 'organizerPno', 'totalPrice', 'deliveryDate', 'collectDate', 'paymentStatus', 'bookingStatus', 'staff_id', 'cust_id', 'equip_id', 'paymentID',

    ];

    protected $date = [

        'bookDate'

    ];

    public function payment(){

        return $this->hasOne('App\Payment', 'book_id', 'book_id');
    }

    public function equipment_customers(){

        return $this->hasMany('App\EquipmentCustomer', 'book_id', 'book_id');
    }

    public function customer()
    {
        return $this->hasOne('App\Customer', 'cust_id', 'cust_id');
    }

    public function staff()
    {
        return $this->hasOne('App\Staff', 'staff_id', 'staff_id');
    }

    public function track(){

        return $this->hasOne('App\Tracking', 'book_id', 'book_id');
    }

}
