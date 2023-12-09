<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Car extends Model
{
    use HasFactory, SoftDeletes;

    // pengganti fillable 
    protected $guarded = []; 

    public function brand(){
        return $this->belongsTo(Brand::class);
    }
    public function type(){
        return $this->belongsTo(Type::class);
    }
    public function booking(){
        return $this->hasMany(Booking::class);
    }

}
