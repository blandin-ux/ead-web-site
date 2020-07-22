@extends('layouts.etudiant')
@section('ventre')
<link rel="stylesheet" href="{{asset('css/style.css')}}">
<div class="container mt-1">
     <form method="post" id="cadre2" action="/reclamation/save" class="form-control mt-5 col-md-8">
       @csrf 
       <h2 class="text-center" id="detail">Détail du méssage</h2> 
       <hr class="separator">
       <h5 id="oh4">Méssage de : <b><i>{{$local->user?$local->user->name:"aucun"}}</i></b> de la filière <b><i>{{$local->filiere?$local->filiere->name:"aucune"}}</b></i></h5>
       <h4 class="text-right mr-5" id="h5">Reclamation de type :<b><i>
       <span id="type">{{$local->type?$local->type->name:"Pas de Type"}}</i></b></span></h4>                            
       <h5 class="text-center" id="oh4"><b>Objet</b> : {{$local->name}}</h5> 
       <h6 id="ch4">Corps du méssage</h6>
       <output  id="corpsmsgl"class="form-control col-md-5 mb-2">{{$local->body}}</br> <b><i>Méssage envoyé le : {{$local->created_at}}</i><b></output> 
       <h4 id="rh4" class="text-left"><span>Réponse :</span>
       <output id="reponse2" class="form-control col-md-8 mt-2">{{$local->reponse}} </br><b><i>Répondu le : {{$local->reponse_at}}</i></b></output>              
       <h5 class="text-right">.</h5>
    </form>  
</div>
@endsection