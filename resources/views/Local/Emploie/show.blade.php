@extends('layouts.local')
@section('ventre')

    <link rel="stylesheet" href="{{ asset('css\bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{ asset('css\style.css')}}">
  
    
      <div style="" class="container pt-2 pb-5">
        <div class="card">
            <h4 class="text-center pt-1">
              {{ $emploie->titre }}, 
              {{ $emploie->semestre?$emploie->semestre->name:"" }}, année académique 
              {{ $emploie->annee?$emploie->annee->name:"" }}
            </h4> 
            <div class="card-header">
                <ul class="list-inline pull-right">
                    <li class="list-inline-item"><a href="/emploies" class="btn btn-sm btn-info">Tous les emploies</a></li>
                    <li class="list-inline-item"><a href="/emploies/edit/{{$emploie->id}}" class="btn btn-sm btn-warning">Modifier</a></li>
                </ul>
                
            </div>
            <div class="card-body">
                <ul class="list-group">
                    <embed id="pdf" src="{{asset($emploie->path)}}" height="500px" whidt="100%" type="application/pdf"/>   
                </ul>                   
            </div>
          </div>
        </div>         
  @endsection