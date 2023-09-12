<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    {{-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> --}}
    <script>
        $(document).ready(function(){
            $('#id_categ').change(function(event){
                $.ajax({
                    "url":"test3/"+event.target.value,
                    "type":"get",
                    "success":function(rep){
                        console.log("test3/"+event.target.value);
                        console.log(res);
                        $('#res').html(rep.map(p=>'<li>'+p.nom+'</li>'));
                    }
                })
            })
        })
    </script>
</head>
<body>
    {{-- mettre details --}}
    @isset($categories)
    <select id="id_categ">
        @foreach ($categories as $cat)
            <option value="{{$cat->id}}">{{$cat->nom}}</option>
        @endforeach
    </select>
    @endisset
    <ul id="res"></ul>
</body>
</html>