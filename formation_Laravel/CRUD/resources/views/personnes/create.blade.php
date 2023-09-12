@extends('personnes.layout')
@section('contenu')
    <form method="POST" action="{{route('personnes.store')}}">
        @csrf
        <table>
            <tr>
                <td>Nom</td>
                <td><input name="nom"/></td>
            </tr>
            <tr>
                <td>Date de naissance</td>
                <td>
                    <input type="date" name="date_naiss"/>
                </td>
            </tr>
            <tr>
                <td>
                    <button>Ajouter</button>
                </td>
            </tr>
        </table>
    </form>
@endsection