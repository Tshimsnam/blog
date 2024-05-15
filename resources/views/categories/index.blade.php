<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Liste des Catégories</title>
</head>
<body>
    <h1>Liste des catégories</h1>
    <p><a href="{{route('categories.create')}}">Enregistrer</a></p>
    <table>
        <thead>
            <tr>
                <th>N°</th>
                <th>Date</th>
                <th>Nom</th>
                <th>Description</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($categories as $i =>$item )
            <tr>
                <td>{{$i+1}}</td>
                <td>{{$item->created_at}}</td>
                <td>{{$item->name}}</td>
                <td>{{$item->description}}</td>
                <td>
                    <a href="{{route('categories.show',$item->id)}}">Voir</a>
                    <a href="{{route('categories.edit', $item->id)}}">Editer</a>
                    <a href="{{route('categories.destroy', $item->id)}}">Supprimer</a>
                </td>

            </tr>
                
            @endforeach
        </tbody>
    </table>
</body>
</html>