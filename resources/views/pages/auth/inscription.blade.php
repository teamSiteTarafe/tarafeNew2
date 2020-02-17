@extends("pages.auth.layouts.master", ["title" => 'Inscription'])

@section('stylecss')
    <link rel="stylesheet" href="{{ asset('css/inscription.css') }}">
@stop

@section("content")

    <div class="div00">

    
        <!--------- block d'entrees ------->
        <div class="div01">
            <p class="bvenu">Bienvenue sur le site de Tarafe</p>

            @if(Session::has('errors'))
                <div class="alert alert-danger" align="center">{{ Session::get('errors') }}</div>
            @endif

            <form method="post" action="{{ route('inscription') }}">
                @csrf
                <input type="text" name="nom" placeholder="nom">
                <input type="text" name="prenom" placeholder="prenom">
                <input type="email" name="email" placeholder="E-mail">
                <input type="tel" name="contact" placeholder="Numéro de téléphone">
                <input type="password" name="mot_de_pass" placeholder="Mot de passe">
                <input type="password" name="mot_de_pass_conf" placeholder="Confirmer votre mot de passe">
                <input type="submit" value="S'inscrire">
            </form>
        </div>

        <!--------- block d'image ------->
        <div class="div02">
            images
        </div>
    </div>
    
@stop 