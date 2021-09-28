<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Provincia extends Model
{
    use HasFactory;
    protected $table = 'provincia';
    protected $primaryKey = 'id_region';
    public $timestamps = false;

    protected $appends = [
        'ciudad'
    ];
    protected $hidden = [
        'id_region'
    ];

    public function ciudad()
    {
        return $this->hasMany(Ciudad::class, 'id_ciudad');
    }

    public function getCiudadAttribute()
    {
        return $this->ciudad()->get();
    }

}
