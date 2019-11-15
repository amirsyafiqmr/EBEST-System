<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tracking extends Model
{
    protected $primaryKey = 'trackNo';

    protected $table = 'tracking';

    protected $fillable = [

        'trackNo', 'trackLocation', 'dateTimeTrack', 'book_id',  //'cust_id'  //'staff_id',

    ];

    protected $dates = [

        'trackDate'

    ];
}
