<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>COVID-19 Updates</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link href="{{asset('css/app.css')}}" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .half-height {
                height: 50vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
                flex-direction: column;
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
                color: #ffffff;
            }

            .links > a {
                color: #ffffff;
                padding: 0 25px;
                font-size: 15px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }

            .header {
                background-image: url({{url('images/coronavirus-4914026.jpg')}});
                background-size: cover;
                padding: 50px;
                font-weight: bold;
            }
        </style>
    </head>
    <body>
        <div class="text-center header half-height flex-center">
            <div class="title">
                COVID-19
            </div>

            <div class="links">
                <a href="{{ url('/cases/overall') }}">Cases</a>
                <a>News</a>
                <a>World Health Organization</a>
            </div>
        </div>

        <div class="container-fluid full-height">
            @yield('content')
        </div>
    </body>
</html>