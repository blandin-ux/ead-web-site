@extends('layouts.index')
@section('page')
<html>     
      <link rel="stylesheet" href="{{ asset('css\bootstrap.min.css')}}">
      <link rel="stylesheet" href="{{ asset('css\slide.css')}}">  

    <div class="card-header">
                <h1 class="text-center" id="h1">Tous les slides</h1>
            </div>

            <div class="container">
                <a href="/slides/create" class="btn btn-danger mt-2">ajouter un slide</a>
                <div id="grid-slide" class="row mt-2">
                    @foreach($slide as $prod)
                    <div class="col-md-3 col-sm-12">
                        <a href="/slides/{{ $prod->id }}/edit">
                            <div class="card">
                                <div class="card-body">
                                    <img class="img-slide ml-1" src="{{ asset($prod->image_uri)}} " alt=""></br>
                                    @if($prod->actif==1)
                                    <a href="/slides/{{$prod->id}}/close" class="btn btn-danger btn-sm mt-1 ml-1">Desactiver</a>
                                    @else
                                    <a href="/slides/{{$prod->id}}/open" class="btn btn-success btn-sm mt-1 ml-1">Activer</a>
                                    @endif                                    
                                    <h6 class="text-center">Titre : {{ $prod->titre }}</h6>
                                    <h6 class="text-center">Sous-Titre : {{ $prod->stitre }}</h6>
                                </div>
                            </div>
                        </a>
                    </div>
                    @endforeach
                </div>
            <div>
              
            </div>
        </div>
</html>        
@endsection