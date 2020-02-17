<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ConnexionController extends Controller
{
    

    public function pageConnexion()
    {
    	return View('pages.auth.connexion');
    }

    public function connexion()
    {


    	$valide = request()->validate([

    		"email" => 'required|email',
    		"password" => 'required|min:6',

    	]);

        if($valide)
        {

        	$result = auth()->attempt([

        		"email" => request('email'),
        		"password" => request('password'),
        	]);

        	//dd($result);

            if($result)
            {
            	$client = auth()->user();
        		return redirect()->route('page.compte')
        		->with(
        			['success' => $client->nom.', Bienvenue sur votre compte']
        		);

            }
            else 
            {
                return redirect()->back()->with('erreur_con',"Email ou mot de passe invalide");
            }
        }
        else
        {
            return redirect()->back()->withErrors($valide);
        }
    }

    public function deconnexion()
    {

    	auth()->logout();
    	return redirect()->route('page.connexion')->with('success','Vous êtes maintenant déconnecté');
    }

}
