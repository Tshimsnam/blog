@extends('layouts.content')
@section('main-content')
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
        <div class="form-group col-md-12 mb-3">
            <label for="">Name</label>
            <input class="form-control" type="text" name="name" placeholder="Enter Name" value="">
            <textarea name="" id="" cols="30" rows="10">Description</textarea>
            <p><button type="submit"class="btn btn-primary" value="Submit">Enregistrer</button></p>

        </div>
        
    </form>
</body>
</html>