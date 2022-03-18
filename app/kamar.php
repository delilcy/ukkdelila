<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class kamar extends Model
{
    public $table='kamar';
    protected $primaryKey = 'id_kamar';
    protected $guarded = [];
}
