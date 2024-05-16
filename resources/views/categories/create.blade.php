@extends('layouts.app')
@section('title')
    Enregistrer categories
@endsection()

@section('content')
<h1>Enregistrer catégorie</h1>

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<form action="{{route('categories.store')}}" method="post">
@csrf
<div class="form-group col-md-12 mb-3">
    <label for="">Name</label>
    <input class="form-control" type="text" name="name" placeholder="Enter Name" value="">
    <label for="">Description</label>
    <textarea name="description" id="" cols="30" rows="10" placeholder="Description" class="form-control"></textarea>
    <p><button type="submit" class="btn btn-primary" value="Submit">Enregistrer</button></p>
</div>
</form>
@endsection