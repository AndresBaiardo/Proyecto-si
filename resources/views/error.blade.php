<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/nav.css">
    <style type="text/css">
        body{
            height: 600px;
            background-repeat: no-repeat;
            background-size: contain;
            background-repeat:no-repeat;
            background-position: center center;
        }
    </style>
</head>
<body>
    <section>
        @yield('error500')
        @yield('error400')
        @yield('error401')
        @yield('error404')
        @yield('error403')
        @yield('error502')
        @yield('error504')
        @yield('error505')
    </section>
</body>
</html>