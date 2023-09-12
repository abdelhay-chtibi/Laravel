@extends('template')

@section('contenu')
    <form method="POST" action="/test3">
        @csrf
        Nom=<input name="nom" value="{{old('nom')}}"/>
        @error('nom')
            {{$message}}
        @enderror 
        <br/>
        <input type="submit" value="Envoyer"/>
    </form>
@endsection