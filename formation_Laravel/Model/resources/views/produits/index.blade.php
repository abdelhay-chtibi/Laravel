@extends('produits.layout')
@section('contenu')
    <script>
        function confirmer(id){
            return confirm('Etes vous sûr de vouloir supprimer la personne '+id);
        }
    </script>
    <a href="{{route('produits.create')}}">Nouvelle personne</a>
    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Nom</th>
                <th>Prix</th>
                <th>Quantite</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($produits as $p)
                <tr>
                    <td>{{$p->id}}</td>
                    <td>{{$p->nom}}</td>
                    <td>{{$p->prix}}</td>
                    <td>{{$p->quantite}}</td>
                    <td><a href="{{route('produits.edit' ,[$p->id])}}" style="">edit</a></td>
                    <td>
                        <form method="post" action="{{route('produits.destroy' , $p->id)}}">
                            @csrf
                            @method('delete')
                            <button onclick="return confirmer({{$p->id}})">delete</button>
                            {{-- return pour annuler evenements --}}
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection