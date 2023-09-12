<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    {{-- @isset est un fontion php qui verifie si une variable est definie et non nulle , et il retourne une resultat boolean  --}}
    @isset($num)
        <p>Yes</p>
    @endisset
    {{-- si test est null on va affiche la paragraphe null --}}
    
    {{-- @empty est une directive Blade qui permet de vérifier si une variable est vide ou non. --}}

    @empty($test)
      <p>null</p>  
    @endempty
</body>
</html>