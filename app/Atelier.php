<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Atelier extends Model
{
    protected $table = 'ateliers';
    public $timestamps = true;
    protected $guarded = [''];
}
