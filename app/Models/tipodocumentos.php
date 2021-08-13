<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tipodocumentos extends Model
{
    use HasFactory;

    protected $table="tipodocumentos";
    protected $primaryKey="idTipodocumentos";
    public $incrementing=true;
    public $timestamps=false;

}
