<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;
    protected $guarded = [];


   public $timestamps = true;

    public function category()
    {
        return $this->belongsTo(Categorie::class);
    }
}
