<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class formapago extends Model
{
    use HasFactory;

    protected $table="formapago";
    protected $primaryKey="idformapago";
    public $incrementing=true;
    public $timestamps=false;

}
