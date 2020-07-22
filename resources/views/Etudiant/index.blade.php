@extends('layouts/etudiant')
@section('titre')
Reclamation de l'étudiant
@endsection
@section('ventre')
    <div class="container mt-5 mb-5">
      <div class="card">
        <div class="card-header">
          <ul class="list-inline">
           <li class="list-inline-item"><a href="reclamations/create" class="btn btn-danger btn-sm"> Faire une reclamation<i class="fa fa-user"></i></a></li>
          </ul>
        </div>
            <h2 class="text-center">Toutes mes reclamations</h2>
         <table class="table table-bordered table-striped"> 
            <thead class="card-body">
              <div class="table table-bordered table-striped table-condensed"> 
                    <tr> 
                        <th>Etats(msg)</th>
                        <th>Date d'envoie</th>
                        <th class="text-center">Objet</th>
                        <th>Type</th>
                        <th>actions</th>
                    </tr>
                <tbody>
                    @foreach($etudiant as $etud)
                    <tr>
                        <td>
                            @if($etud->actif==1 && $etud->read==1)
                            <span class="badge badge-success">Répondu</span>
                            @elseif($etud->read==0 && $etud->actif==1)
                            <span class="badge badge-info">En cours...</span>
                            @else
                            <span class="badge badge-warning">Non vu</span>
                            @endif
                        </td>
                        <td>{{$etud->created_at}}</td>
                        <td>{{$etud->name}}</td>  
                        <td>{{$etud->type?$etud->type->name:"Pas de Type"}}</td> 
                        <td>
                            <ul class="list-inline">
                                <li class="list-inline-item">
                                  @if($etud->actif==1 && $etud->read==1)
                                  <a href="/reclamations/show/{{$etud->id}}" class="btn btn-info btn-sm">Détail</a> 
                                  @elseif($etud->read==0 && $etud->actif==1)
                                  <a href="/reclamations/{{$etud->id}}/close" class="btn btn-danger btn-sm">Annuler</a>
                                  @else
                                  <a href="/reclamations/{{$etud->id}}/open" class="btn btn-success btn-sm">Renvoyer</a>
                                  @endif                                                                 
                                </li>   
                            </ul>   
                        </td>
                    </tr>
                    @endforeach
                </tbody>                
            </thead> 
        </table>
      </div>  
    </div> 
    <div>{{$etudiant->links()}}</div>   
 @endsection