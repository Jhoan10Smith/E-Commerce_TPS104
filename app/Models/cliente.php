<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class cliente extends Model
{
    use HasFactory;

    protected $table="cliente";
    protected $primaryKey="codigoCliente";
    public $incrementing=true;
    public $timestamps=false;

}
