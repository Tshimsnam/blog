@extends('layouts.app')
@section('title')
    Enregistrer categories
@endsection()

@section('content')
<h1>Enregistrer catégorie</h1>


<form action="{{route('categories.update', $categorie->id)}}" method="post">
@csrf
@method('PUT')

<div class="form-group col-md-12 mb-3">
    <label for="">Name</label>
    <input class="form-control" type="text" name="name" placeholder="Enter Name" value="{{$categorie->name}}">
    <label for="">Description</label>
    <textarea name="description" id="" cols="30" rows="10" placeholder="Description" class="form-control">{{$categorie->description}}"</textarea>
    <p><button type="submit" class="btn btn-primary" value="Submit">Enregistrer</button></p>
</div>
</form>
@endsection