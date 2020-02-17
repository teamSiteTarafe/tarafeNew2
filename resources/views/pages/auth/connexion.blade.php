@extends("pages.auth.layouts.master", ["title" => 'Connexion'])

@section('stylecss')
    <link rel="stylesheet" href="{{ asset('css/connexion.css') }}">
@stop

@section("content")


    <div class="container00">
        <p class="connect">Connectez-vous</p>
        
        @if(Session::has('success'))
            <div class="alert alert-success" align="center">{{ Session::get('success') }}</div>
        @endif
        
        <form method="POST" action="{{ route('connexion') }}">
            
            <input type="email" name="email" placeholder="Adresse e-mail">
            <input type="password" name="password" placeholder="Mot de passe">
            <label for="rappeler">
                <input type="checkbox" name="rappeler" id="rappeler">
                Se rappeler de moi
            </label>

            <a href="#" class="oublier">Mot de passe oublié ?</a>

            {{ csrf_field() }}

            <input type="submit" value="Se connecter">
           
        </form>
        <p class="creer">
            Vous n'avez pas encore de compte? <br>
            <a href="{{ route('page.inscription') }}">Créez en un ici</a>
        </p>
    </div>

	
@stop 
{{--<!-- @push('sfooter')
<script type="text/javascript"></script>
@endpush -->--}}