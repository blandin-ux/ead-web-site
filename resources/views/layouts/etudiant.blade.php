
<html>
    <title> @yield('titre') </title>
    <head>
    <link rel="stylesheet" href="{{ asset('css\bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{ asset('css\style.css')}}">
    </head>
    <body>
      
        <div id="tetes">
                
<div class="cotainer-fluid">          
   </div>
        <h2 class="text-center mt-5"> Bienvenue à vous {{Auth()->user()->name}} !</h2>
        <div class="text-right">
          <a class="btn btn-danger mr-5" id="pos"  href="/deconnexion">Déconnexion <span class="fa fa-sign-out"></span></a> 
        </div>
    
   <div>
                 <div class="text-right">
            </div>

        </div>

        <div id="ventre">
        @yield('ventre')
        </div>

<div id="preceptionniste" class="contenair-fluid">
    <div class="pt-5 mt-4" id="font"> 
    <a href="https://www.facebook.com/" class="fa fa-facebook list-inline-item" id="fb"> </a>
    <a href="https://www.google.fr/" class="fa fa-google list-inline-item" id="gl"> </a>
    <a href="http://www.twitter.com" class="fa fa-twitter list-inline-item" id="twi"> </a>
    <a href="http://www.whatsapp.com" class="fa fa-whatsapp list-inline-item" id="wha"> </a>
    <a href="http://www.instagram.com" class="fa fa-instagram list-inline-item" id="ins"></a>
    <a href="http://https://www.bonbache.fr/moteur.php" class="fa fa-bonbache" id="bon"></a>
    </div>
 </div>             
         
        </div>
    </body>  
</html>