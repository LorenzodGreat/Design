<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
    <title>@yield('title')</title>
    <style>
        body{
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
    <x-header/>
    @yield('main')
    <x-footer/>
</body>
</html>