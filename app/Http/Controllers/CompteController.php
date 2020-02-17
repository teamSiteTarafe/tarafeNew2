<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CompteController extends Controller
{

	public function __construct()
	{
		$this->middleware('auth');
	}
    
    public function pageCompte()
    {

    	$client = auth()->user();
    	return View('pages.comptes.compte',compact('client'));
    }
}
