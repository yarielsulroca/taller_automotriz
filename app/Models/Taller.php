<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\AreasTaller;

class Taller extends Model
{
   protected $table = 'taller';

   public $timestamps = false;
    protected $fillable = [
        'nombre',
        'descripcion'
    ];

    public function areasTaller()
    {
    return $this->hasMany(AreasTaller::class, 'taller','id' );
    }
    public function buscaAreasTaller($id)
    {
        $areas_taller= AreasTaller::where('taller','=',$id)->get();
        return $areas_taller;
    }

}
