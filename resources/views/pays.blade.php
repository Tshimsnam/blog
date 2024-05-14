<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pays</title>
</head>
<body>
    <h1>{{$title}}</h1>

    <table border="1px">
        <thead>
            <th>id</th>
            <th>Nom</th>
        </thead>
    
    <tbody>
        @foreach ($pays as $key => $item)
        <tr>
            <td>{{ $item['id']}}</td>
            <td><a href="{{route('detailPays', $key)}}">{{ $item['nom'] }}</a></td>
        </tr>
        @endforeach
       
    </tbody>
</table>  
</body>
</html>