@extends('layouts.etudiant')
@section('ventre')
<body id="body">
<link rel="stylesheet" href="{{ asset('css/style.css')}}">
<div class="container mt-1">
     <form id="cadre1" method="post" action="/reclamation/save" class="form-control">
       @csrf
      <div class="">   
       <h2 class="text-center" id="detail">Détail du méssage</h2>
       <hr class="separator">              
       <h4 id="oh4">Objet :
       <output id="objet1" class="form-control col-md-4 mb-2 m-2 ml-2">{{$etudiant->name}}</output></h4>       
       <h5 class="text-right mr-5" id="h5"><i>Type de reclamation :</i>
       <span id="type1">{{$etudiant->type?$etudiant->type->name:"Pas de Type"}}</span></h5>          
       <h4 id="ch4">Corps du méssage</h4>
       <output id="corpsmsg" class="form-control col-md-6 mb-2">{{$etudiant->body}}</br> <b><i>Méssage envoyé le : {{$etudiant->created_at}}</i><b></output> 
       @foreach($user as $etud)
       <h4 id="rh4" class="text-right"><i>Répondu par :</i> <span><b>{{$etud->name}}</b></span>
       @endforeach
       <output id="reponse1" class="form-control col-md-8 mb-3 mt-3 text-left">{{$etudiant->reponse}} </br><b><i>Répondu le : {{$etudiant->reponse_at}}</i></b></output>            
    </div>    
   </form>  
</div>
</body>
@endsection