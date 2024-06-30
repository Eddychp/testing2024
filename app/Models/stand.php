<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class stand extends Model
{
    use HasFactory;

    protected $guarded=['id'];
    public function empadronamietos(){
        return $this->hasMany(Empadronamieto::class);
    }
   
    protected static function boot(){
        parent::boot();
        static::created(function($stand){
            prueba::create([
                'stand_id'=> $stand->id,
            ]);
            
        });
    }
    
}
