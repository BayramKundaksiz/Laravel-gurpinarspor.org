<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;



class AnasayfaSlider extends Model
{

    use HasFactory;


    public function linkler(): HasOne
    {
        return $this->hasOne(Linkler::class,'link_id');
    }

}
