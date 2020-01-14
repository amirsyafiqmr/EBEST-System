<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Equipment extends Model
{
    protected $primaryKey = 'equip_id';

    protected $table = 'equipment';

    protected $fillable = [

        'equip_id', 'equipName', 'equipType', 'equipPrice', 'equipQuantity', 'equipCurrentQuantity', 'staff_id', 'image'

    ];

    public function getImage(){
        return "images/$this->image";
    }

    public function equipment_customers(){

        return $this->hasMany('App\EquipmentCustomer', 'equip_id', 'equip_id');
    }
}
