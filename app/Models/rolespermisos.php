<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class rolespermisos extends Model
{
    use HasFactory;

    protected $table="rolespermisos";
    protected $primaryKey = 'idRolesPermisos';
    public $incrementing = true;
    public $timestamps = false;      
}
