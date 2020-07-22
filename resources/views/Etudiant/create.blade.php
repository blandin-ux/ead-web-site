@extends('layouts.etudiant')
@section('titre')
Reclamation de l'étudiant
@endsection
@section('ventre') 
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
        <div class="container mt-5">
         <h3 class="mt-1 mb-4 ml-1 text-center">Remplissez ce formulaire avec beaucoups d'attention Merci !</h3>
         <form action="/reclamations" method="post" class="fomr-group">
          @csrf
            <div class="row">
              <div class="col-md-4">
                <div class="form-group">
                  <h2></h2>
                </div>  
              </div>
             </div>
             <input type="hidden" name="filiere_id" value="{{Auth::user()->filiere_id}}">
             <div class="row"> 
              <div class="col-md-3">
                <div class="form-group">
                <input type="text" name="name" placeholder="Saisir votre objet" class="form-control">                   
                </div>
              </div>
              <select name="type_id" id="" class="form-control col-md-3 ml-3 mb-2" >
                        <option value="">Type de reclamation</option>
                            @foreach($type as $etud)
                        <option value="{{ $etud->id}}">{{ $etud->type_id=$etud->name }}</option>
                           @endforeach 
              </select>
            </div>  
                <div class="row">
                   <div class="col-md-4">    
                    <textarea placeholder="Poser votre probleme (méssage) ici...!" class="form-control" name="body" id="" cols="30" rows="10"></textarea>
                   </div> 
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