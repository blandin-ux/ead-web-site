<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="{{asset('fonts/font-awesome.css')}}">
        <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{asset('css/style.css')}}">
        <title>Plate-forme ead</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
                background-image: url('');
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }

            #btn>a{
                color: white;
                text-decoration:none;
            }
            #text{
                animation-name: text;
                animation-duration: 3s;
                animation-delay: 1;                

            } 


            @keyframes text{
    0%{
        color: black;
        margin-bottom: -40px;
    }
    30%{
        letter-spacing: 25px;
        margin-bottom: -40px;
        font-weight: 200;
    }
    85%{
        letter-spacing: 8px;
        margin-bottom: -40;
    }
    100%{
        color: snow;
        
    }
    
}

        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                     <button id="btn" class="btn btn-primary" ><a href="{{ route('login') }}">Connexion <i class="fa fa-sign-in"></i></a></button>

                        @if (Route::has('register'))
                         <button id="btn" class="btn btn-danger" ><a href=""> <i class="fa fa-user-plus"></i></a></button>
                        @endif
                    @endauth
                </div>
            @endif
            <div class="content">
                <div class="title m-b-md" id="text">
                    E.A.D
                </div>

                <div class="links">
                    <a href="https://laravel.com/docs">Docs <i class="fa fa-book"></i></a>
                    <a href="https://facebook.com"> Facebook <i id="fb" class="fa fa-facebook"></i></a>
                    <a href="https://whatsapp.com"> Whatsapp <i id="wha" class="fa fa-whatsapp"></i></a>
                    <a href="https://Youtube.com">Youtube <i id="you" class="fa fa-youtube"></i></a>
                    <a href="https://instagram.com">Instagram <i id="ins" class="fa fa-instagram"class="fa fa-users"></i></a>
                    <a href="https://github.com/laravel/laravel">GitHub <i class="fa fa-github"></i></a>
                    <a href="https://twitter.com">Twitter <i id="twi" class="fa fa-twitter"></i></a>                    
                    <a href="https://google.com">Google <i id="gl" class="fa fa-google"></i></a>                   
                </div>
            </div>
        </div>
    </body>
</html>
