<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=h, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Enregistrer pays</h1>

    <form action="{{route('savePays')}}" method="post">
        @csrf
        <p>Nom: <input name="name" type="text"></p>
        <p>Capital: <input name="capital" type="text"></p>
        <p><button type="submit">Enregistrer</button></p>

    </form>
</body>
</html>