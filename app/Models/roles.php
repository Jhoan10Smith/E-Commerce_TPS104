<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class roles extends Model
{
    use HasFactory;

    protected $table="roles";
    protected $primaryKey = 'idRoles';
    public $incrementing = true;
    public $timestamps = false;      
}
