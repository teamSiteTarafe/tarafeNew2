<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Historique extends Model
{
    
    protected $table = 'historiques';
    public $timestamps = true;
    protected $guarded = [''];

}
