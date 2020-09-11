@extends('layouts/local')
@section('titre')
Traitement des reclamations
@endsection
@section('ventre')
    <div class="container mt-5 mb-5">
      <div class="card">
        <div class="card-header">
        </div>
            <h2 class="text-center">Toutes les reclamations faitent par les Etudiants</h2>
         <table class="table table-bordered table-striped"> 
            <thead class="card-body">
              <div class="table table-bordered table-striped table-condensed"> 
                    <tr> 
                        <th>Etats(msg)</th>
                        <th>Date de reception</th>
                        <th>Objet</th>
                        <th>Type</th>
                        <th>Etudiant</th>
                        <th>Filière</th>
                        <th>Actions</th>
                    </tr>
                <tbody>
                    @foreach($local as $loc)
                    <tr>
                        <td><?=$loc->read? '<span class="badge badge-success">Msg répondu !</span>':'<span class="badge badge-danger">Non repondu</span>'?></td>
                        <td>{{$loc->created_at->format('d-m-j à H:m:s')}}</td>
                        <td>{{$loc->name}}</td>  
                        <td>{{$loc->type?$loc->type->name:"aucun"}}</td> 
                        <td>{{$loc->user?$loc->user->name:"aucun"}}</td>
                        <td>{{$loc->filiere?$loc->filiere->name:"aucune"}}</td>
                        <td>
                            <ul class="list-inline">
                                <li class="list-inline-item">
                                  @if($loc->read==0)
                                  <a href="reclamation/show/{{$loc->id}}" class="btn btn-success btn-sm">Lire</a>
                                  @else
                                  <a href="reclamation/detail/{{$loc->id}}" class="btn btn-primary btn-sm">Ouvrir</a>
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
    <div></div>   
 @endsection