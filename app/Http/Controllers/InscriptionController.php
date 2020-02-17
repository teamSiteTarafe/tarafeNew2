<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Client;

class InscriptionController extends Controller
{
    
    public function pageInscription()
    {
    	return View('pages.auth.inscription');
    }

    public function inscription()
    {
    	$valide = request()->validate([

    		'nom' => 'required|min:2',
    		'prenom' => 'required|min:3',
    		'email' => 'required|email',
    		'contact' => 'required|min:8',
    		'mot_de_pass' => 'required|min:6',
    		'mot_de_pass_conf' => 'same:mot_de_pass',
    	]);

    	if($valide)
    	{
    		
    		$create = Client::create([

    			'nom' => $valide['nom'],
    			'prenom' => $valide['prenom'],
    			'email' => $valide['email'],
    			'numeroDeTelephone' => $valide['contact'],
    			'motDePasse' => bcrypt($valide['mot_de_pass']), //bcrypt
    		]);

    		$create->save();

    		if($create)
    		{
    			return redirect()->route('page.connexion')
    			->with('success','Inscription effectuée avec succés');
    		}
    		else
    		{
    			return redirect()->back()->with('errors','Inscription non effectuée');
    		}
    	}else
    	{
    		return redirect()->back()->with('errors','Inscription non effectuée');
    	}
    }
}
