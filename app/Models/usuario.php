<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class usuario extends Model
{
    use HasFactory;

    protected $table="usuarios";
    protected $primaryKey="idUsuario";
    public $incrementing=true;
    public $timestamps=false;

    public function permisos()
    {
        $sql="
        SELECT DISTINCT p.permisosNombre,p.permisosRuta
        FROM usuarios as u,
             roles as r,
             usrol as ur,
             rolespermisos as rp,
             permisos as p
        WHERE ur.idUsuario = u.idUsuario
        AND   ur.idRoles = r.idRoles
        AND   rp.idRoles = r.idRoles
        AND   rp.idPermisos = p.idPermisos
        AND   u.idUsuario= :codigo";
          
       $permisos = DB::select(DB::raw($sql), array( 'codigo' => $this->idUsuario));
       $this->permisos= $permisos;              
       return $permisos;
    }

}
