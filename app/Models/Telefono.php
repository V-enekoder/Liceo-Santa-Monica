<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Telefono extends Model
{
    use HasFactory;
    protected $table = 'telefonos';
    protected $fillable = [
        'Telefono',
    ];

    public function representante(){
        return $this->belongsTo(Representante::class, 'id');
    }

}

