@extends('services.layout')
@section('content')
<div class="card">
  <div class="card-header">services Page</div>
  <div class="card-body">
  
        <div class="card-body">
        <h5 class="card-title">Nom : {{$services->nom_s}}</h5>
        <p class="card-text">nbr employes : {{ $services->nbr_employes }}</p>
        
  </div>
      
    </hr>
  
  </div>
</div>
@endsection