<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    use HasFactory;
    protected $guarded =[];

    //One to One with User
    public function phone(){
        return $this->belongsTo(Phone::class , 'phone_id');
    }

}
