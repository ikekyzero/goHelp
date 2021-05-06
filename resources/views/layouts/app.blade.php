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
</head>

<body>
<button type="button" class="btn btn-primary position-absolute" style="z-index: 100" id="sidebar-btn">Primary</button>
<div class="d-flex flex-column bg-light w-100 position-absolute" style="z-index: 100;height: 100%; left:-10000px" id="sidebar">
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light navbar-laravel">
            <div class="container">
                <!--<a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
-->
                    <ul class="navbar-nav">
                        <!-- Authentication Links -->
                        @guest
                        <li><a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a></li>
                        <li><a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a></li>
                        @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </div>
                        </li>
                        @endguest
                    </ul>
                <button type="button" class="btn btn-primary" style="z-index: 100" id="sidebar-btn2">Primary</button>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</div>
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
    shadowRetinaUrl: 'images/marker.png',
    shadowSize: [70, 70],
    shadowAnchor: [22, 55]
});
marker1 = DG.marker([62.02105,129.703027], {icon: myIcon}).addTo(map);
marker1 = DG.marker([62.019057, 129.706714], {icon: myIcon2}).addTo(map);

group = DG.featureGroup(marker1);
group.addTo(map);
group.on('click', function(e) {
    map.setView([e.latlng.lat, e.latlng.lng]);
});
});
</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script type="text/javascript">
  $('#sidebar-btn').click(function() {
    $('#sidebar').fadeIn('slow');
    $('#sidebar').toggleClass('visible');
  });
  $('#sidebar-btn2').click(function() {
    console.log("asdasd");
    $('#sidebar').removeClass('visible');
    $('#sidebar').fadeOut('slow');
  });
</script>
</body>
</html>