<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type = "text/css" href="{{ asset("css/style.css") }}"/>
</head>
<body>
    <nav> 
        <a href="{{ route('index') }}"> Index </a>
    </nav>
    @yield("content")
    
</body>
</html>