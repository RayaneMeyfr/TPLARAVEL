@extends('layouts.app')

@section("titre",'contact')

@section("contenu")
<h1>Voici la page d'accueil</h1>
<form action="">
    <label for="mail">Email</label>
    <input type="mail" name="mail" id="">
    
    <label for="message">Message</label>
    <input type="text" name="message">
</form>
@endsection