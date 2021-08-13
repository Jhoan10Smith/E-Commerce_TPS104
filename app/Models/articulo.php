<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class articulo extends Model
{
    use HasFactory;

    protected $table="articulo";
    protected $primaryKey="idArticulo";
    public $incrementing=true;
    public $timestamps=false;

}
