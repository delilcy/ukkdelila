<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class resepsionis extends Model
{
    public $table='reservasi';
    protected $primaryKey = 'id_reservasi';
    protected $guarded = [];
}
