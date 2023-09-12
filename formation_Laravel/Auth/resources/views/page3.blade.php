<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
    {{-- La fonction auth() dans Laravel est une fonction d'aide (helper function)
    qui renvoie une instance de la classe Illuminate\Auth\AuthManager.
    Cette classe gère l'authentification des utilisateurs dans l'application Laravel. --}}
    Hello {{auth()->user()->name}}
    <form method="post" action="/logout">
        @csrf
        <button>logout</button>
    </form>
</body>
</html>