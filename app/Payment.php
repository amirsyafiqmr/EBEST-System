<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    protected $primaryKey = 'paymentID';

    protected $table = 'payment';

    protected $fillable = [

        'paymentID', 'amount', 'billplz_id', 'url', 'book_id'

    ];
}
