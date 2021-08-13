<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tipos extends Model
{
    use HasFactory;

    protected $table="tiposidentificacion";
    protected $primaryKey="idTipos";
    public $incrementing=true;
    public $timestamps=false;

}
