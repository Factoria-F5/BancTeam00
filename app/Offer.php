<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Offer extends Model
{
    protected $fillable = [

        'title',
            'description',
            'location',
            'agreementType',
            'quantity',
            'limitDate',
            'beneficiary',
            'companyOffer'
    ];
 /*    {{ \Carbon\Carbon::parse($user->limitDate)->format('d/m/Y')}} */
    protected $dates =[
        'limitDate'
    ];
   /*  protected $dateFormat = 'U'; */

   /* ->format('d \d\e M \d\e\l Y') */

    public function getDateForInput(){
        return $this->limitDate->format('Y-m-d');
    }
}
