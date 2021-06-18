<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class barrio extends Model
{
    use HasFactory;

    protected $table="barrio";
    protected $primaryKey="idBarrio";
    public $incrementing=true;
    public $timestamps=false;

}
