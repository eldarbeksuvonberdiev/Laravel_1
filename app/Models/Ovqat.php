<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ovqat extends Model
{
    /** @use HasFactory<\Database\Factories\OvqatFactory> */
    use HasFactory;

    protected $fillable =[
        'name'
    ];

    public function ovqatmasalliq(){
        return $this->hasMany(OvqatMasalliq::class,'ovqat_id','id');
    }

}
