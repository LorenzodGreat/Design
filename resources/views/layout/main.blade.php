<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="css/zoom.css">
    <link rel="stylesheet" href="https://cdn.rawgit.com/StarPlugins/thumbelina/8b9c09d9/thumbelina.css">  
    <script>
    window.console = window.console || function(t) {};
  </script>  
    <script>
    if (document.location.search.match(/type=embed/gi)) {
      window.parent.postMessage("resize", "*");
    }
  </script>
<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.js" defer></script>

    <title>@yield('title')</title>
    <style>
    @import url(https://cdnjs.cloudflare.com/ajax/libs/MaterialDesign-Webfont/5.3.45/css/materialdesignicons.min.css);
    /*
    module.exports = {
        plugins: [
            require('tailwindcss-inset')({
                insets: {
                    full: '100%'
                }
            })
        ]
    };
    */
    .inset-l-full {
        left: 100%;
    }        body {
            background-color: black;
        }

        .vcontainer {
            position: relative;
            width: 100%;
        }

        .imagey {
            opacity: 1;
            display: block;
            width: 100%;
            transition: .5s ease;
            backface-visibility: hidden;
        }

        .vmiddle {
            transition: .5s ease;
            opacity: 0;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            -ms-transform: translate(-50%, -50%);
            text-align: center;
        }

        .vcontainer:hover .imagey {
            opacity: 0.3;
        }

        .vcontainer:hover .vmiddle {
            opacity: 1;
        }

        .vtext {
            background-color: #04AA6D;
            color: white;
            font-size: 16px;
            padding: 16px 32px;
        }

    </style>
</head>

<body>
    <x-header />
    @yield('main')
    <x-footer />
    <script defer src="js/zoom.js"></script>
</body>

</html>
