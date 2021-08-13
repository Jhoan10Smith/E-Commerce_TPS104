<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class factura extends Model
{
    use HasFactory;

    protected $table="factura";
    protected $primaryKey="idFactura";
    public $incrementing=true;
    public $timestamps=false;
}
