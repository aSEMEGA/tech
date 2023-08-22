@extends('reservations.layout') 
@section('content') 
<div class="row"> 
    <div class="col-lg-12 margin-tb"> 
        <div class="float-start"> 
            <h2> Afficher la reservation</h2> 
        </div> 
        <div class="float-end"> 
            <a class="btn btn-outline-primary" href="{{ route('reservation.index') }}"> Retour</a> 
        </div> 
    </div> 
</div> 
<div class="row"> 
    <div class="col-xs-12 col-sm-12 col-md-12"> 
        <div class="form-group"> 
            <strong>Numéro: </strong> 
            {{ $reservation->idv }} 
        </div> 
    </div> 
    <div class="col-xs-12 col-sm-12 col-md-12"> 
        <div class="form-group"> 
            <strong>Nom: </strong> 
            {{ $reservation->nom }} 
        </div> 
    </div> 
    <div class="col-xs-12 col-sm-12 col-md-12"> 
        <div class="form-group"> 
            <strong>Prenom: </strong> 
            {{ $reservation->prenom }} 
        </div> 
    </div> 
    <div class="col-xs-12 col-sm-12 col-md-12"> 
        <div class="form-group"> 
            <strong>Sexe: </strong> 
            {{ $reservation->sexe }} 
        </div>
    </div> 
    <div class="col-xs-12 col-sm-12 col-md-12"> 
        <div class="form-group"> 
            <strong>Adresse: </strong> 
            {{ $reservation->adresse }} 
        </div>
    </div> 
    <div class="col-xs-12 col-sm-12 col-md-12"> 
        <div class="form-group"> 
            <strong>Telephone: </strong> 
            {{ $reservation->telephone }} 
        </div>
    </div> 
    <div class="col-xs-12 col-sm-12 col-md-12"> 
        <div class="form-group"> 
            <strong>Compagnie: </strong> 
            {{ $reservation->compagnie }} 
        </div>
    </div> 
    <div class="col-xs-12 col-sm-12 col-md-12"> 
        <div class="form-group"> 
            <strong>Date de depart: </strong> 
            {{ $reservation->dateDepart }} 
        </div>
    </div> 
    <div class="col-xs-12 col-sm-12 col-md-12"> 
        <div class="form-group"> 
            <strong>Heure de depart: </strong> 
            {{ $reservation->heureDepart }} 
        </div>
    </div> 
    <div class="col-xs-12 col-sm-12 col-md-12"> 
        <div class="form-group"> 
            <strong>Source: </strong> 
            {{ $reservation->source }} 
        </div>
    </div> 
    <div class="col-xs-12 col-sm-12 col-md-12"> 
        <div class="form-group"> 
            <strong>Destination: </strong> 
            {{ $reservation->destination }} 
        </div>
    </div> 
    <div class="col-xs-12 col-sm-12 col-md-12"> 
        <div class="form-group"> 
            <strong>Montant du billet: </strong> 
            {{ $reservation->montantBillet }} 
        </div>
    </div> 
    <div class="col-xs-12 col-sm-12 col-md-12"> 
        <div class="form-group"> 
            <strong>Date de reservation: </strong> 
            {{ $reservation->dateReservation }} 
        </div>
    </div> 
</div> @endsection