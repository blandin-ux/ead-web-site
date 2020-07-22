@extends('layouts.etudiant')
@section('titre')
Reclamation de l'étudiant
@endsection
@section('ventre') 
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
        <div class="container mt-5">
         <h3 class="mt-1 mb-4 ml-1 text-center">Création des Emploies du temps </h3>
         <form enctype="multipart/form-data" action="/emploies" method="post" class="fomr-group">
          @csrf
            <div class="row">
              <div class="col-md-4">
                <div class="form-group">
                  <h2></h2>
                </div>  
              </div>
             </div>
             <div class="row"> 
              <select name="semestre_id" id="" class="form-control col-md-3 ml-3 mb-2" >
                        <option value="">Semestre</option>
                            @foreach($semestre as $etud)
                        <option value="{{ $etud->id}}">{{ $etud->semestre_id=$etud->name }}</option>
                           @endforeach 
              </select>
              <select name="filiere_id" id="" class="form-control col-md-3 ml-3 mb-2" >
                        <option value="">Filiere</option>
                            @foreach($filiere as $etud)
                        <option value="{{ $etud->id}}">{{ $etud->filiere_id=$etud->name }}</option>
                           @endforeach 
              </select>
              <select name="site_id" id="" class="form-control col-md-3 ml-3 mb-2" >
                        <option value="">Site</option>
                            @foreach($site as $etud)
                        <option value="{{ $etud->id}}">{{ $etud->site_id=$etud->name }}</option>
                           @endforeach 
              </select>
              <input type="text" placeholder="Saisire la désignation" name="titre" class="form-control col-md-3 ml-3">              
                    <div class="form-control ml-3 col-md-3">
                            <label for="file">Emploie du temps au format pdf</label>
                            <input type="file" name="path" id="file" class="form-control" required>                         
                    </div>
              <select name="annee_id" id="" class="form-control col-md-3 ml-3 mb-2" >
                        <option value="">Année accademique</option>
                            @foreach($annee as $etud)
                        <option value="{{ $etud->id}}">{{ $etud->annee_id=$etud->name }}</option>
                           @endforeach 
              </select>
              

            </div>  
              </div>
              <div class="container">
                   <button class="btn btn-danger"  type="submit">Envoyer <i class="fa fa-send"></i></button>
              </div>
              </div> 
            </div>
          </form>  
        </div>
@endsection