<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class galeria extends Model
{
    use HasFactory;

    protected $table="galeriaproductos";
    protected $primaryKey="idGaleria";
    public $incrementing=true;
    public $timestamps=false;
}
