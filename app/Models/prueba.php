<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class prueba extends Model
{
    use HasFactory;
    protected $guarded=['id'];
    public function stand()
    {
        return $this->belongsTo(Stand::class);
    }
    public function period(){
        return $this->belongsTo(Period::class);
    }

    
}
