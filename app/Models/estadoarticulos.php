<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class estadoarticulos extends Model
{
    use HasFactory;

    protected $table="estadoarticulos";
    protected $primaryKey="idEstadoArticulos";
    public $incrementing=true;
    public $timestamps=false;

}
