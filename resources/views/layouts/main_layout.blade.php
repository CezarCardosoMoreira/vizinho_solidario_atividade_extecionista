<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">

    <title>Document</title>
</head>
<body>
    @yield('content')

    <br><br>
    <div class="bg-black text-white p3 text-center mt-5">
        [ Vizinhos Solidarios    &copy;   {{ date('Y') }} ]
    </div>
</body>
</html>
