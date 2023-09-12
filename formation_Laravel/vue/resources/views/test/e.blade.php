<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    @switch($couleur)
        @case($couleur=='vert')
            <p>la couleur dans la route test 5 est vert</p>
            @break
        @case($couleur=='rouge')
            <p>Rouge</p>
            @break
        @default       
    @endswitch
</body>
</html>