<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Region extends Model
{
    use HasFactory;

    protected $table = 'region';
    protected $primaryKey = 'id_region';
    public $timestamps = false;

  /*   protected $appends = [
        'empresa'
    ];
    public function getEmpresaAttribute()
    {
        return DB::table('empresa')->where('id_empresa', '=', $this->idEmpresa)->first();
    } */
}
