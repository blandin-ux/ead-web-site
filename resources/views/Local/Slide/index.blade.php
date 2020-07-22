<html>     
      <link rel="stylesheet" href="{{ asset('css\bootstrap.min.css')}}">
      <link rel="stylesheet" href="{{ asset('css\slide.css')}}">  

    <div class="card-header">
                <h1 class="text-center" id="h1">TOUS LES slide</h1>
            </div>

            <div class="container">
                <div id="grid-slide" class="row">
                    @foreach($slide as $prod)
                    <div class="col-md-3 col-sm-12">
                        <a href="/slide/{{ $prod->id }}">
                            <div class="card">
                                <div class="card-body">
                                    <img class='img-slide' src="{{ asset($prod->image_uri)}} " alt="">
                                    <h6 class="text-center">{{ $prod->titre }}</h6>
                                    <div class="card-content">
                                        <div class="card-content-item">
                                            <span class="badge badge-default">}</span>
                                        </div>
                                        <div class="card-content-item">
                                            <span class="badge badge-info">.....</span>
                                        </div>
                                        <div class="card-content-item">
                                            <span class="badge badge-warning">... </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <button class="btn btn-danger btn-block btn-sm">Ajouter au panier</button>
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