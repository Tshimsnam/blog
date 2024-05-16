@extends('layouts.app')

@section('title')
    {{$categorie->name}}

@endsection

@section('content')
<h1> {{$categorie->name}} </h1>
<p>{{$categorie->created_at}} </p>
<div>{{$categorie->description}} </div>

 
    <a href="{{route('categories.edit', $categorie->id)}}"class="btn btn-primary">Editer</a>
    <a href="{{route('categories.destroy', $categorie->id)}}" class="btn btn-danger">Supprimer</a>
@endsection
