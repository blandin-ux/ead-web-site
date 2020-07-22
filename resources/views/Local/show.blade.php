@extends('layouts.local')
@section('ventre')
   <h2 class="text-center">Détail du méssage</h2>
   <hr class="separator">
     <form method="post" action="/reclamation/save" class="form-control mt-5 col-md-8">
       @csrf 
       <input type="hidden" name="id" value="{{$local->id}}">
       <h5>Méssage de l'étudiant(e) : <b>{{$local->user?$local->user->name:"aucun"}}</b></h5>
       <h5>De la filière : <b>{{$local->filiere?$local->filiere->name:"aucune"}}</b></h5>
       <h6>Corps du méssage :</h6>
       <output class="form-control col-md-8"><?=$local->read==0? "<p><b>{$local->body}</b></p>":"<p>{$local->body}</p>"?></output>
       <textarea required placeholder="Répondez par ici...!" class="form-control col-md-5 mt-3" name="reponse" id="" cols="30" rows="10"></textarea>
       <input type="submit" class="btn btn-danger mt-2" value="Répondre">
    </form>  
</div>
@endsection