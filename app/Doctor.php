<?php

namespace App;
use Illuminate\Database\Eloquent\Model;
use App\Major;

class Doctor extends Model
{
    protected $table="doctors";
    protected $fillable = ['name','major_id','price_per_half','price_per_hour'];

    public function major()
    {
        return $this->belongsTo(Major::class,'major_id');   
    }
}
