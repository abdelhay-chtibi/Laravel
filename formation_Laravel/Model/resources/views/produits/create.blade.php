@extends('produits.layout')
@section('contenu')
    <form method="POST" action="{{route('produits.store')}}">
        @csrf
        <table>
            <tr>
                <td>Nom</td>
                <td><input name="nom"/></td>
            </tr>
            <tr>
                <td>Prix</td>
                <td><input name="prix"/></td>
            </tr>
            <tr>
                <td>Quantite</td>
                <td><input type="number" name="quantite"/></td>
            </tr>
            <tr>
                <td>
                    <button>Ajouter</button>
                </td>
            </tr>
        </table>
    </form>
@endsection