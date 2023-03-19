<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Phone extends Model
{
    use HasFactory;
    protected $guarded = [];
    
    //One to One with User
    public function user()
    {
        return $this->hasOne(User::class, 'phone_id');
    }
}
