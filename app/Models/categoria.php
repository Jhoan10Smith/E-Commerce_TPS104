<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class categoria extends Model
{
    use HasFactory;

    protected $table="categoria";
    protected $primaryKey="idCategoria";
    public $incrementing=true;
    public $timestamps=false;

}
