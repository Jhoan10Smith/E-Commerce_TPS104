<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class detalleventa extends Model
{
    use HasFactory;

    protected $table="detalleventa";
    protected $primaryKey="idDetalle";
    public $incrementing=true;
    public $timestamps=false;
}
