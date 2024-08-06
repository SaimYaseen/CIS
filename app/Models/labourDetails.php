<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class labourDetails extends Model
{
    use HasFactory;
    function contractWithLabour1(){
        return $this->belongsTo(contract::class,'contract_id','id');
    }
}
