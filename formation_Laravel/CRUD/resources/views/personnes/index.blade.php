@extends('personnes.layout')
@section('contenu')
    <script>
        function confirmer(id){
            return confirm('Etes vous sûr de vouloir supprimer la personne '+id);
        }
    </script>
    <a href="{{route('personnes.create')}}">Nouvelle personne</a>
    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Nom</th>
                <th>Date de naisssance</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($personnes as $p)
                <tr>
                    <td>{{$p->id}}</td>
                    <td>{{$p->nom}}</td>
                    <td>{{$p->date_naiss}}</td>
                    <td><a href="{{route('personnes.edit' ,[$p->id])}}">edit</a></td>
                    <td>
                        <form method="post" action="{{route('personnes.destroy' , $p->id)}}">
                            @csrf
                            @method('delete')
                            <button onclick="return confirmer({{$p->id}})" style="background: none;
                                border: none;
                                color: blue;
                                cursor: pointer;
                                text-decoration: underline;
                                font-size: inherit;">delete</button>
                            {{-- return pour annuler evenements --}}
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection