<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    {{-- Ajax est une technique de développement web qui permet de créer des applications interactives
    en utilisant des technologies telles que JavaScript, XML  --}}
    {{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script> --}}
    {{-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> --}}
    
</head>
<body>
    {{-- mettre details --}}
    @isset($categories)
    <select id="id_categ" onchange="update(this.value)">
        <option>Choisir la categorie</option>
        @foreach ($categories as $cat)
            <option value="{{$cat->id}}">{{$cat->nom}}</option>
        @endforeach
    </select>
    @endisset
    <ul id="res"></ul>
    <script>
        function update(id){
            console.log(id)
            var lst = document.getElementById("res");
            fetch(`/test3/${id}`)
                .then(res=>res.json())
                .then(res=>{
                    console.log(res)
                    lst.innerHTML="";
                    res.map(p=>{
                        let elt=document.createElement('li');
                        elt.innerHTML=p.nom;
                        lst.appendChild(elt);
                    })
                })
        }
    </script>
</body>
</html>