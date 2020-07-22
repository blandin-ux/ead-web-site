<html>
         <link rel="stylesheet" href="{{ asset('css\bootstrap.min.css')}}">           

       <div class="container"> 
         <h2 class="text-center">Nouveau slide</h2>
           <form enctype="multipart/form-data" action="/slides" method="post">
             @csrf
             <div class="row">
                 <input type="hidden" name="id">
                 <div class="col-md-3"> 
                      <div class="form-group"> 
                         <input type="text" class="form-control" placeholder="Titre" name="titre">
                 </div>
                      </div>
                      <div class="col-md-3"> 
                        <input type="text" class="form-control" placeholder="Sous titre" name="stitre">                      
                      </div> 
                   </div>   
 
                    <div class="form-group">
                            <label for="file">Image</label>
                            <input type="file" name="image_uri" id="file" class="form-control" required>                         
                                 </div>
                 <button class="btn btn-danger btn-xs" > Envoyer </button>    
    
                </div>                            
           </form>
       </div>
</html>