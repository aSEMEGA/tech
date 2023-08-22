@extends('reservations.layout') 
@section('content') 
<div class="row"> 
    <div class="col-lg-12 margin-tb"> 
        <div class="float-start"> 
            <h2>Faire une reservation</h2> 
        </div> 
        <div class="float-end"> 
            <a class="btn btn-outline-primary" href="{{ route('reservation.index') }}"> Retour</a> 
        </div> 
    </div> 
</div> 
@if ($errors->any()) 
<div class="alert alert-danger"> 
    <strong>Oups! </strong> 
    Il y a eu des problèmes avec votre entrée.<br><br> 
    <ul> 
        @foreach ($errors->all() as $error) 
        <li>{{ $error }}</li> 
        @endforeach 
    </ul> 
</div> 
@endif 
<form action="{{ route('reservation.store') }}" method="post"> 
    @csrf 
    <div class="row"> 
        <div class="col-xs-6 col-sm-6 col-md-6"> 
            <div class="form-group"> 
                <strong>Nom</strong> 
                <input type="text" name="nom" class="form-control" placeholder="Saisir le nom"> 
            </div>
        </div> 
    </div> 
    <div class="row"> 
        <div class="col-xs-6 col-sm-6 col-md-6"> 
            <div class="form-group"> 
                <strong>Prenom</strong> 
                <input type="text" name="prenom" class="form-control" placeholder="Saisir le prenom"> 
            </div> 
        </div> 
    </div> 
    <div class="row">
        <div class="col-xs-6 col-sm-6 col-md-6">
            <div class="form-group">
                <strong>Sexe:</strong>
                <input type="text" name="sexe" class="form-control" placeholder="Saisir le sexe">
            </div>
        </div>
    </div>
    <div class="row"> 
        <div class="col-xs-6 col-sm-6 col-md-6"> 
            <div class="form-group"> 
                <strong>Adresse</strong> 
                <input type="text" name="adresse" class="form-control" placeholder="Votre adresse..."> 
            </div> 
        </div> 
    </div> 
    <div class="row"> 
        <div class="col-xs-6 col-sm-6 col-md-6"> 
            <div class="form-group"> 
                <strong>Telephone</strong> 
                <input type="text" name="telephone" class="form-control"placeholder="Votre telephone"> 
            </div> 
        </div> 
    </div> 
    <div class="row"> 
        <div class="col-xs-6 col-sm-6 col-md-6"> 
            <div class="form-group"> 
                <strong>Compagnie</strong> 
                <input type="text" name="compagnie" class="form-control" placeholder="Compagnie"> 
            </div> 
        </div> 
    </div> 
    <div class="row"> 
        <div class="col-xs-6 col-sm-6 col-md-6"> 
            <div class="form-group"> 
                <strong>Date de depart</strong> 
                <input type="date" name="dateDepart" class="form-control"> 
            </div> 
        </div> 
    </div> 
    <div class="row"> 
        <div class="col-xs-6 col-sm-6 col-md-6"> 
            <div class="form-group"> 
                <strong>Heure de depart</strong> 
                <input type="time" name="heureDepart" class="form-control"> 
            </div> 
        </div> 
    </div> 
    <div class="row"> 
        <div class="col-xs-6 col-sm-6 col-md-6"> 
            <div class="form-group"> 
                <strong>Source</strong> 
                <input type="text" name="source" class="form-control" placeholder="Votre source"> 
            </div> 
        </div> 
    </div> 
    <div class="row"> 
        <div class="col-xs-6 col-sm-6 col-md-6"> 
            <div class="form-group"> 
                <strong>Destination</strong> 
                <input type="text" name="destination" class="form-control" placeholder="Votre destination"> 
            </div> 
        </div> 
    </div> 
    <div class="row"> 
        <div class="col-xs-6 col-sm-6 col-md-6"> 
            <div class="form-group"> 
                <strong>Montant du billet</strong> 
                <input type="text" name="montantBillet" class="form-control" placeholder="Montant du billet"> 
            </div> 
        </div> 
    </div> 
    <div class="row"> 
        <div class="col-xs-6 col-sm-6 col-md-6"> 
            <div class="form-group"> 
                <strong>Date de reservation</strong> 
                <input type="date" name="dateReservation" class="form-control"> 
            </div> 
        </div> 
    </div> 
    <div class="row"> 
        <p></p> 
        <div class="col-xs-12 col-sm-12 col-md-12 text-center"> 
            <button type="submit" class="btn btn-primary">Enregistrer</button> 
        </div> 
    </div> 
</form> 
@endsection