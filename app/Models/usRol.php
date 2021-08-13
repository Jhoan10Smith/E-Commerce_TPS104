<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class usrol extends Model
{
    use HasFactory;
    protected $table="usrol";
    protected $primaryKey = 'idUsRol';
    public $incrementing = true;
    public $timestamps = false;      

}
