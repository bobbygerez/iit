<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class TrainingPayment extends Model
{
    
    protected $table = 'trainingpayments';
    protected $fillable = [

    	'firstname', 'lastname', 'paid_amount', 'received_amount', 'remarks', 'change'

    ];
    public function getPaidAmountAttribute($val){

        return (float) $val;
    }
    public function getReceivedAmountAttribute($val){

        return (float) $val;
    }
    public function getCreatedAtAttribute($value){
        return  Carbon::parse($value)->toDayDateTimeString();
        
    }
}
