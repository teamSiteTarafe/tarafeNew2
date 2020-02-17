<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LigneCommande extends Model
{
    
    protected $table = 'ligne_commandes';
    public $timestamps = true;
    protected $guarded = [''];
    
}
