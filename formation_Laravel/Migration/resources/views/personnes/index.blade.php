<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <table>
        <thead>
            <tr>
                <th>id</th>
                <th>nom</th>
                <th>Date Naissance</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($personnes as $p)
                <tr>
                    <td>{{$p->id}}</td>
                    <td>{{$p->nom}}</td>
                    <td>{{$p->{'date_naiss'} }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
    
</body>
</html>