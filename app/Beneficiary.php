<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Beneficiary extends Model
{
    protected $fillable = [

            'name',
            'surname',
            'dni',
            'birthday',
            'adress',
            'phone',
            'email'
    ];
    protected $dates =[
        'birthday'
    ];

    public function getDateForInput(){
        return $this->birthday->format('Y-m-d');
    }
}
