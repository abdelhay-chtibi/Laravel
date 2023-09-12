<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <ul>
        @foreach($couleurs as $couleur)
            @if($loop->first)
            <li>First</li>
            @endif
            @if($loop->last)
            <li>Last</li>
            @endif
            <li>{{$couleur}}</li>
        @endforeach
    </ul>
    
</body>
</html>