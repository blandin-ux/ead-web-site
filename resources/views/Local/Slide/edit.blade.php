<html>
         <link rel="stylesheet" href="{{ asset('css\bootstrap.min.css')}}">           

       <div class="container"> 
         <h2 class="text-center">Modification du slide</h2>
           <form enctype="multipart/form-data" action="/slides/save" method="post">
             @csrf
             <div class="row">
                 <input type="hidden" name="id" value="{{$slide->id}}">
                 <div class="col-md-3"> 
                      <div class="form-group"> 
                         <input type="text" value="{{$slide->titre}}" class="form-control" placeholder="Titre" name="titre">
                 </div>
                      </div>
                      <div class="col-md-3"> 
                        <input type="text" value="{{$slide->stitre}}" class="form-control" placeholder="Sous titre" name="stitre">                      
                      </div> 
                   </div>   
 
                    <div class="form-group">
                            <label for="file">Image</label>
                            <input type="file" name="image_uri" id="file" class="form-control col-md-5" required>                         
                            <button class="btn btn-danger btn-xs mt-3" > Envoyer </button>
                   </div>     
                       
                 </div>

             </div>       
           </form>
       </div>
</html>