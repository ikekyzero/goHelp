<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script>
        window.auth = {!!auth()->user()!!}
    </script>
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">

  <script src="https://code.jquery.com/jquery-3.5.0.js"></script>
</head>

<body>
    <div class="modal" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>Modal body text goes here.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary">Save changes</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<div class="position-relative" id="cardbro" style="display: none">
    <div class="card position-absolute translate-middle start-50" style="width: 90%; top:40vh; z-index: 1000;">
        <img src="images/123.jfif" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">Разгрузить вещи</h5>
            <p class="card-text m-0">Улица: Ойунского, 24/2</p>
            <p class="card-text m-0">Подробности: Нужно разгрузить вещи с пятого этажа тк у меня боли рука.</p>
            <p class="card-text">Пользователь: Бурнашёва А.В.</p>
            <button type="button" class="btn btn-primary float-left" id="close-cardbro" style="background-color: #7CB694;">Закрыть</button>
            <button type="button" class="btn btn-primary float-right" data-toggle="modal" style="background-color: #7CB694;" data-target="#exampleModal">
              Отозваться
            </button>
        </div>
    </div>
</div>  
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Ваша заявка отправлена!</h5>
      </div>
      <div class="modal-body">
        Бурнашёва А.В. рассматривает вашу заявку помощи.
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Закрыть</button>
      </div>
    </div>
  </div>
</div>
<button class="navbar-toggler position-fixed p-0" style="z-index: 1050; left:2.7%;bottom: 1%;" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation"><img src="images/chat.png" style="width: 3rem; height: 3rem"></button>
<button class="navbar-toggler position-fixed p-0" style="z-index: 1050; right:2.7%;bottom: 1%;" type="button" data-toggle="collapse" data-target="#navbarCollapse2" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation"><img src="images/profile.png" style="width: 3rem; height: 3rem"></button>
<button class="navbar-toggler position-fixed p-0" style="z-index: 1050; right:43%;bottom: 1%;" type="button" data-toggle="collapse" data-target="#navbarCollapse3" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation"><img src="images/task.png" style="width: 3rem; height: 3rem"></button>
<nav class="navbar navbar-expand-lg navbar-light fixed-top position-absolute">
    <div class="collapse navbar-collapse w-100" style="height: 100vh;;background: rgb(201,231,213);
background: linear-gradient(180deg, rgba(201,231,213,1) 42%, rgba(255,255,255,1) 100%);" id="navbarCollapse"><div id="app" style="width: 100%; height: 100%;">
        <nav class="navbar navbar-expand-md navbar-light navbar-laravel" style="background-color: #C9E7D5;">
            <div class="container">
                <!--<a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
-->
                    <ul class="navbar-nav mr-auto">
                        <li><h3>Чат</h3></li>
                    </ul>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
      </div>
</nav>
<nav class="navbar navbar-expand-lg navbar-light fixed-top position-absolute">
    <div class="collapse navbar-collapse bg-white w-100" id="navbarCollapse2"  style="height: 100vh;background: rgb(201,231,213);
background: linear-gradient(180deg, rgba(201,231,213,1) 42%, rgba(255,255,255,1) 100%);

"><div id="app" style="width: 100%; height: 100%;">
        <nav class="navbar navbar-expand-md navbar-light navbar-laravel" style="background-color: #C9E7D5;">
            <div class="container">
                    <ul class="navbar-nav">
                        <li><h3>Профиль</h3></li>
                    </ul>
            </div>
        </nav>
        <div class="container">
            <div class="row px-3 pt-2">
                <div class="col-12 rounded p-3" style="background-color: white;">
                    <div class="row p-0">
                        <div class="col-4 mb-2">
                            <img src="images/avatar2.jpg" clas="rounded-circle" style="width:100%">
                        </div>
                        <div class="col-8">
                            <div class="container row p-0" style="height:10vh">
                                <div class="col-6 p-1 h-100">
                                    <img src="images/like.png" class="float-left" alt="">
                                    <span class="m-0 p-0 float-left align-middle" style="margin-top: 1.2vh !important">6,75тыс</span>
                                </div>
                                <div class="col-6 p-1 h-100">
                                    <img src="images/dislike.png" class="float-left" alt="">
                                    <span class="m-0 p-0 float-left align-middle" style="margin-top: 1.2vh !important">11</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <h4 class="mb-1">Афанасьев Афанасий</h4>
                            <p>Люблю помогать людям.</p>
                        </div>  
                    </div>
                </div>
                <div class="col-12 p-5">
                </div>  
                <div class="col-12 h-100">
                    <div class="row h-100">
                        <div class="col-12 h-100 rounded pb-3 pt-2 align-self-end" style="background-color: #EEEEEE">
                            <div class="row h-100 w-100 mr-0">
                                <div class="col-6 px-3" style="height:2rem">
                                    <p class="text-center p-0 m-0">Выполненные</p>
                                </div>
                                <div class="col-6 px-3" style="height:2rem">
                                    <p class="text-center p-0 m-0">Размещённые</p>
                                </div>
                                <hr>
                                <div class="overflow-auto col-12" style="height: 30rem">
                                    <div class="card w-100">
                                      <div class="card-body">
                                        Помог перейти бабушке через светофор
                                      </div>
                                    </div>
                                    <div class="card w-100">
                                      <div class="card-body">
                                        Помог сделать видеомонтаж для друга
                                      </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
      </div>
</nav>
<nav class="navbar navbar-expand-lg navbar-light fixed-top position-absolute">
    <div class="collapse navbar-collapse bg-white w-100" id="navbarCollapse3"  style="height: 100vh;background: rgb(201,231,213);
background: linear-gradient(180deg, rgba(201,231,213,1) 42%, rgba(255,255,255,1) 100%);

"><div id="app" style="width: 100%; height: 100%;">
        <nav class="navbar navbar-expand-md navbar-light navbar-laravel" style="background-color: #C9E7D5;">
            <div class="container">
                    <ul class="navbar-nav">
                        <li><h3>Вакансии</h3></li>
                    </ul>
            </div>
        </nav>
        <div class="container">
            <div class="row px-3 pt-2">
                <div class="col-12 p-1">
                    <div class="row p-0">
                        <img src="images/post.png" class="w-100 mb-3" style="height:auto">
                        <img src="images/post.png" class="w-100 mb-3" style="height:auto">
                        <img src="images/post.png" class="w-100 mb-3" style="height:auto">
                        <img src="images/post.png" class="w-100 mb-3" style="height:auto">
                        <img src="images/post.png" class="w-100 mb-3" style="height:auto">
                    </div>
                </div>
            </div>
        </div>
    </div>
      </div>
</nav>
<div id="map" class="w-100" style="height: 100%;">
</div>
<script src="https://maps.api.2gis.ru/2.0/loader.js?pkg=full"></script>
<script>
DG.then(function() {
    map = DG.map('map', {
    'center': [62.018059, 129.701374],
    'zoom': 15
});
var myIcon = DG.icon({
    iconUrl: 'images/shadow.jpg',
    iconRetinaUrl: 'images/avatar.jpg',
    iconSize: [43, 43],
    iconAnchor: [9, 47],
    popupAnchor: [-3, -76],
    shadowUrl: 'images/marker.png',
    shadowRetinaUrl: 'images/marker.png',
    shadowSize: [70, 70],
    shadowAnchor: [22, 55]
});
var myIcon2 = DG.icon({
    iconUrl: 'images/shadow.jpg',
    iconRetinaUrl: 'images/avatar2.jpg',
    iconSize: [43, 43],
    iconAnchor: [9, 47],
    popupAnchor: [-3, -76],
    shadowUrl: 'images/marker.png',
    shadowRetinaUrl: 'images/marker2.png',
    shadowSize: [70, 70],
    shadowAnchor: [22, 55]
});
var myIcon3 = DG.icon({
    iconUrl: 'images/point.png',
    iconRetinaUrl: 'images/point.png',
    iconSize: [43, 43],
    iconAnchor: [0, 0],
    popupAnchor: [-3, -76],
});
marker1 = DG.marker([62.02105,129.703027], {icon: myIcon}).on('click', function() {
      $( "#cardbro" ).show( );}).addTo(map);
marker2 = DG.marker([62.019057, 129.706714], {icon: myIcon2}).on('click', function() {
      $( "#cardbro" ).show( );}).addTo(map);
marker3 = DG.marker([62.01807, 129.701399], {icon: myIcon3}).addTo(map);

$( "#close-cardbro" ).click(function() {
  $( "#cardbro" ).hide( );
});
});
</script>
</body>
</html>