@extends('personnes.layout')
@section('contenu')
    <form method="POST" action="{{route('personnes.update',[$personne->id])}}">
        {{-- $personne il se trouve dans edit --}}
        @csrf
        {{-- patch envoie moins de donnees (courectif) --}}
        @method('patch')
        <table>
            <tr>
                <td>Id:</td>
                <td><input name="nom" value="{{$personne->id}}" readonly/></td>
            </tr>
            <tr>
            <tr>
                <td>Nom</td>
                <td><input name="nom" value="{{$personne->nom}}"/></td>
            </tr>
            <tr>
                <td>Date de naissance</td>
                <td><input type="date" name="date_naiss" value="{{$personne->date_naiss}}"/></td>
            </tr>
            <tr>
                <td>
                    <button>Appliquer</button>
                </td>
            </tr>
        </table>
    </form>
@endsection