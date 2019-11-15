<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EquipmentCustomer extends Model
{
    protected $primaryKey = 'equip_customer_id';

    protected $table = 'equipment_customers';

    protected $fillable = [

        'equip_customer_id', 'quantity', 'book_id', 'equip_id'

    ];

    public function equipment()
    {
        return $this->hasOne('App\Equipment', 'equip_id', 'equip_id');
    }
}
