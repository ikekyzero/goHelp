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

  <script src="https://code.jquery.com/jquery-3.5.0.js"></script><style>
            html,
            body,
            #container {
                margin: 0;
                width: 100%;
                height: 100%;
                overflow: hidden;
            }

            .buttonRoot {
                width: 32px;
                box-shadow: 0 1px 3px 0 rgba(38, 38, 38, 0.5);
                border-radius: 4px;
                display: flex;
                flex-direction: column;
                overflow: hidden;
                background: #fff;
            }

            .button {
                padding: 0;
                outline: 0;
                border: none;
                cursor: pointer;
                background: #fff;
                width: 32px;
                height: 32px;
                color: #262626;
                box-sizing: border-box;
            }

            .button:hover {
                opacity: 0.7;
            }

            .button:active {
                color: #028eff;
            }
        </style>
    </head>
    <body>
<button class="navbar-toggler position-fixed p-0" style="z-index: 1050; left:2.7%;bottom: 1%;" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation"><img src="images/chat.png" style="width: 3rem; height: 3rem"></button>
<button class="navbar-toggler position-fixed p-0" style="z-index: 1050; right:2.7%;bottom: 1%;" type="button" data-toggle="collapse" data-target="#navbarCollapse2" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation"><img src="images/profile.png" style="width: 3rem; height: 3rem"></button>
<button class="navbar-toggler position-fixed p-0" style="z-index: 1050; right:43%;bottom: 1%;" type="button" data-toggle="collapse" data-target="#navbarCollapse3" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation"><img src="images/task.png" style="width: 3rem; height: 3rem"></button>
        <div id="container"></div>
        <script src="https://mapgl.2gis.com/api/js/v1"></script>
        <script>
            const map = new mapgl.Map('container', {
                center: [55.31878, 25.23584],
                zoom: 13,
                key: '428d6b98-39b8-4f02-89f1-2cc025d47345',
            });

            const controlContent = `
                <div class="buttonRoot" id="find-me">
                    <button class="button">
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            width="32"
                            height="32"
                            viewBox="0 0 32 32"
                        >
                            <path
                                fill="currentColor"
                                d="M17.89 26.27l-2.7-9.46-9.46-2.7 18.92-6.76zm-5.62-12.38l4.54 1.3 1.3 4.54 3.24-9.08z"
                            />
                        </svg>
                    </button>
                </div>
                <p id="status"></p>
            `;

            const control = new mapgl.Control(map, controlContent, {
                position: 'topLeft',
            });

            const status = control.getContainer().querySelector('#status');
            let circle;

            function success(pos) {
                const center = [pos.coords.longitude, pos.coords.latitude];

                status.textContent = '';
                if (circle) {
                    circle.destroy();
                }

                circle = new mapgl.CircleMarker(map, {
                    coordinates: center,
                    radius: 14,
                    color: '#0088ff',
                    strokeWidth: 4,
                    strokeColor: '#ffffff',
                    stroke2Width: 6,
                    stroke2Color: '#0088ff55',
                });
                map.setCenter(center);
                map.setZoom(16);
            }

            function error() {
                status.textContent = 'Unable to retrieve your location';
            }

            function geoFindMe() {
                if (!navigator.geolocation) {
                    status.textContent = 'Geolocation is not supported by your browser';
                } else {
                    status.textContent = 'Locating…';
                    navigator.geolocation.getCurrentPosition(success, error);
                }
            }

            control
                .getContainer()
                .querySelector('#find-me')
                .addEventListener('click', geoFindMe);
        </script>
</body>
</html>