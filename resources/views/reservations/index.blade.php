@extends('reservations.layout') 
@section('content') 
<div class="row">
    <div class="col-lg-12 margin-tb"> 
        <div class="float-start"> 
            <h2>Liste des reservations</h2> 
        </div> 
        <div class="float-end"> 
            <a class="btn btn-outline-success" href="{{ route('reservation.create') }}"> +Nouvelle reservation</a> 
        </div> 
    </div> 
</div> 
@if ($message = Session::get('success')) 
<div class="alert alert-success"> <p>
    {{ $message }}
</p> 
</div> 
@endif 
<table class="table table-bordered"> 
    <tr> 
        <th>Numéro</th> 
        <th>Nom</th> 
        <th>Prenom</th> 
        <th>Sexe</th> 
        <th>Adresse</th> 
        <th>Telephone</th> 
        <th>Compagnie</th> 
        <th>Date de depart</th> 
        <th>Heure de depart</th> 
        <th>Source</th> 
        <th>Destination</th> 
        <th>Montant du billet</th> 
        <th>Date de reservation</th> 
        <th width="280px">Action</th> 
    </tr> 
    @foreach ($reservation as $res) 
    <tr> 
        <td>{{ $res->idv }}</td> 
        <td>{{ $res->nom }}</td> 
        <td>{{ $res->prenom }}</td> 
        <td>{{ $res->sexe }}</td> 
        <td>{{ $res->adresse }}</td> 
        <td>{{ $res->telephone}}</td> 
        <td>{{ $res->compagnie }}</td> 
        <td>{{ $res->dateDepart }}</td> 
        <td>{{ $res->heureDepart }}</td> 
        <td>{{ $res->source }}</td> 
        <td>{{ $res->destination }}</td> 
        <td>{{ $res->montantBillet }}</td> 
        <td>{{ $res->dateReservation }}</td> 
        <td> 
            <form action="{{ route('reservation.destroy',$res->idv) }}" method="post"> 
                <a class="btn btn-outline-primary" href="{{ route('reservation.show',$res->idv) }}">Afficher</a> 
                <a class="btn btn-outline-success" href="{{ route('reservation.edit',$res->idv) }}">Éditer</a> 
                @csrf @method('DELETE') 
                <button type="submit" class="btn btn-outline-danger">Supprimer</button> 
            </form> 
        </td>
    </tr> 
    @endforeach 
</table> 
<div class="d-flex justify-content-center pagination-lg"> 
    {!! $reservation->links('pagination::bootstrap-4') !!} 
</div> 
@endsection