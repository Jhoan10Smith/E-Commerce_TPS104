<?php


namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class empleado extends Model
{
    use HasFactory;

    protected $table="empleado";
    public $primarykey="id";
    public $incrementing = true;
    public $timestamps = false;
    
}
