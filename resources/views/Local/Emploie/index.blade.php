@extends('layouts/local')
@section('titre')
Affichage des emploies du temps
@endsection
@section('ventre')
    <div class="container mt-5 mb-5">
      <div class="card">
        <div class="card-header">
        </div>
            <h2 class="text-center">Tous les emploies du temps</h2>
         <table class="table table-bordered table-striped"> 
            <thead class="card-body">
              <div class="table table-bordered table-striped table-condensed"> 
                    <tr> 
                        <th>Etats</th>
                        <th>Semestre</th>
                        <th>Filiere</th>
                        <th class="text-center">Désignation</th>
                        <th>Site</th>
                        <th>Action</th>
                    </tr>
                <tbody>
                    @foreach($emploie as $emp)
                    <tr>
                        @if($emp->actif==1)
                        <td><span class="badge badge-success">Publié</span></td>
                        @else
                        <td><span class="badge badge-danger">Archivé</span></td>
                        @endif
                        <td>{{$emp->semestre?$emp->semestre->name:"aucun"}}</td>
                        <td>{{$emp->filiere?$emp->filiere->name:"Aucune"}}</td>  
                        <td>{{$emp->titre}}</td> 
                        <td>{{$emp->site?$emp->site->name:"Aucun"}}</td>
                        <td>
                        @if($emp->actif==0) 
                        <a href="/emploie/open/{{$emp->id}}" class="btn btn-success btn-sm">Publier</a>
                        @else
                        <a href="/emploie/close/{{$emp->id}}" class="btn btn-danger btn-sm">Archiver</a>
                        @endif</td>
                        <td>
                            <ul class="list-inline">
                                <li class="list-inline-item">                                   
                                 <td><a href="/emploies/{{$emp->id}}/show" class="btn btn-primary btn-sm">Ouvrir</a></td>                                                              
                                </li>   
                            </ul>   
                        </td>
                    </tr>
                    @endforeach
                </tbody>                
            </thead> 
        </table>
      </div>  
      <a href="emploies/create" type="submit" class="btn btn-danger col-md-4 mt-3">Créer un emploie du temps</a>    
    </div> 
    <div></div>   
 @endsection