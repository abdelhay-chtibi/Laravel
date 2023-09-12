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
                    <li>{{$couleur}}</li>   
            @endforeach
        </ul>
        <ul>
            @for ($i = 0 ; $i < sizeof($couleurs) ; $i++)
                <li>{{$couleurs[$i]}}</li>
            @endfor
        </ul>
        <ul>
            @for ($i = 0 ; $i < 10 ; $i++)
                <li>{{$i}}</li>
            @endfor
        </ul>
        <ul>
            @for ($i = 0 ; $i < 10 ; $i++)
                <li>{{$i}}</li>
                @if($i == 5)
                @break
                @endif
            @endfor
        </ul>
            
        <ul>
            @for ($i = 0 ; $i < 10 ; $i++)
                @if($i == 5 || $i == 6)
                @continue
                @endif
                <li>{{$i}}</li>
            @endfor
        </ul>
</body>
</html>