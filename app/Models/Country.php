<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    use HasFactory;

    //1st approach  to store into database  
    // protected $fillable = ['name','capital','currency','population'];
    
}
