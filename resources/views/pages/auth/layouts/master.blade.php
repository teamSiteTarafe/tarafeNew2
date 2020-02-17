<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	
    @yield('stylecss')
    
    <title> Tarafé - {{ $title ?? '' }} </title>
</head>
<body>

    @include('../pages.auth._partials.menu2')
    
    @yield('content')
    
</body>
</html>