<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class reservasi extends Model
{
    public $table='reservasi';
    protected $primaryKey = 'id_reservasi';
    protected $guarded = [];
}
