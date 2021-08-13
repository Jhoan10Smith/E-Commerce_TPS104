<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class generos extends Model
{
    use HasFactory;

    protected $table="generos";
    protected $primaryKey="idGenero";
    public $incrementing=true;
    public $timestamps=false;

}
