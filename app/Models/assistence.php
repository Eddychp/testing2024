<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class assistence extends Model
{
    use HasFactory;
<<<<<<< HEAD

    protected $fillable = [
        'status',
        'activity_id',
        'partner_id',

    ];
    //Relacion de 1 a muchos inversa
    public function activity(){
        return $this->belongsTo(activity::class);
    }
=======
>>>>>>> c8d5c6e648ff3052aa721082b5ccc1aa958f8941

    //Relación de 1 a * inversa
    public function partners(){
        return $this->belongsTo(partner::class);
    }

    //Relacion de 1 * 1
    public function collection(){
        return $this->hasOne(spouse::class);
    }

    //Relacion de 1 a 1
    public function payment(){
        return $this->hasOne(payment::class);
    }


}
