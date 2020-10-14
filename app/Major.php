<?php

namespace App;
use Illuminate\Database\Eloquent\Model;
use App\Doctor;

class Major extends Model
{
	  protected $table="majors";
      protected $fillable = ['name'];

      public function doctor()
      {
      	 return $this->hasMany(Doctor::class,'id','major_id');
      }
}
