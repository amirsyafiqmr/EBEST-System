<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    protected $primaryKey = 'paymentID';

    protected $fillable = [

        'paymentID', 'totalPrice', 'book_id'

    ];
}
