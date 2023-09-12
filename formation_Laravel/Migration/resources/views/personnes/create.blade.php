<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form method="POST" action="{{route('personnes.store')}}">
        @csrf
        Nom:<input name="nom">
        <br>
        Date de naissance:<input type="date" name="date_naiss">
        <br>
        <button>Ajouter</button>
    </form>
</body>
</html>