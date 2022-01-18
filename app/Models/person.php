<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;



class person extends Model
{
    use HasFactory;
    // 4th approach
    protected $fillable = ['name','email','phone','country_id'];
    public function country()
    {
        return $this->belongsTo('App\Models\Country');
    }
}
