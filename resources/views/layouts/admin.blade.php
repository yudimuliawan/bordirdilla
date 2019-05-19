<!DOCTYPE html>
<html>

<head>

    <title>@yield('pagetitle')</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <style>
        body {
            font-family: "Lato", sans-serif;
        }

        .sidenav {
            height: 100%;
            width: 15%;
            position: fixed;
            /* z-index: 0; */
            top: 0;
            left: 0;
            background-color: #f7e4f0;
            overflow-x: hidden;
            padding-top: 20px;
        }

        .upper{
            text-align: center;
            background-color: #ef8e9c;
            width: 100%;
            height: 10%;
            
        }
        .upper h4{
            text-transform: uppercase;
        }

        .sidenav a {
            padding: 6px 8px 6px 16px;
            text-decoration: none;
            /* font-size: 25px; */
            color: #818181;
            display: block;
        }

        .sidenav a:hover {
            color: #1b1313;
        }

        .main {
            margin-left: 15%;
            /* Same as the width of the sidenav */
            /* font-size: 28px; */
            /* Increased text to enable scrolling */
            padding: 0px 10px;
        }

        @media screen and (max-height: 450px) {
            .sidenav {
                padding-top: 15px;
            }

            .sidenav a {
                font-size: 18px;
            }
        }
    </style>
    @yield('styles')
</head>

<body>

    @yield('header')
    @yield('menubar')

    @yield('content')


    @yield('footer')
    @yield('scripts')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
</body>

</html>