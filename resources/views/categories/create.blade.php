@extends('layouts.app')
@section('title')

Enregistrer categories

@endsection()

@section('content')
<h1>Enregistrer catégorie</h1>

<form action="{{route('categories.store')}}" method="post">
@csrf
<p>Nom : <input type="text" name="name"></p>
<p>Description : <textarea name="description" id="" cols="30" rows="10"></textarea></p>
<p><button type="submit">Enregistrer</button></p>
</form>
@endsection