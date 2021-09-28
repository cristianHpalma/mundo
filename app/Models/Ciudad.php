<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ciudad extends Model
{
    use HasFactory;

    protected $table = 'ciudad';
    protected $primaryKey = 'id_ciudad';
    public $timestamps = false;

    protected $hidden = [
        'id_provincia'
    ];
}
