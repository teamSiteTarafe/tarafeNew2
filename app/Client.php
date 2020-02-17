<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Auth\Authenticatable as BasicAuthenticatable;

class Client extends Model implements Authenticatable
{
    
    protected $table = 'clients';

    use BasicAuthenticatable;

    public $timestamps = true;
    protected $guarded = [''];


    //
    public function getAuthPassword()
    {
        return $this->motDePasse; 
    }
    
}
