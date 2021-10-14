<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Donatelli | {{$proyect->nombre}}</title>
    <!-- Scripts -->

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/ab58011517.js" crossorigin="anonymous"></script>
    <!-- Styles -->
    <link href="{{ url('css/main.css') }}" rel="stylesheet">
</head>
<body>
    <section>
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <img src="{{url('img')}}/Donatelli-Builders-Logo.png" alt="" class="img-fluid logo">
                </div>
                <div class="col-12">
                    <h1>{{$proyect->nombre}} <strong>DASHBOARD</strong></h1>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-4">
                    <a href="{{$proyect->link_1}}" target="_blank">Projects Plans</a>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-4">
                    <a href="{{$proyect->link_2}}" target="_blank">Product Selections</a>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-4">
                    <a href="{{$proyect->link_3}}" target="_blank">Project updates</a>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-4">
                    <a href="{{$proyect->link_4}}" target="_blank">Meetings</a>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-4">
                    <a href="{{$proyect->link_5}}" target="_blank">Photos</a>
                </div>
            </div>
        </div>
    </section>
</body>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="{{ url('js/main.js') }}"></script>
</html>
