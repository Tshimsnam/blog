@extends('layouts.app')

@section('title')
    <h1>Liste des catégories</h1>

@endsection

@section('content')
    <p><a href="{{route('categories.create')}}" class="btn btn-primary">Enregistrer</a></p>

    <div class="table-responsive">
        <table class="table table-hover">
            <thead class="class="table-primary">
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
                        <a href="{{route('categories.show',$item->id)}}" class="btn btn-primary">Voir</a>
                        <a href="{{route('categories.edit', $item->id)}}"class="btn btn-primary">Editer</a>
                        <a href="{{route('categories.destroy', $item->id)}}" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal" >Supprimer</a>
                    </td>
    
                </tr>
                    
                @endforeach
            </tbody>
        </table>

        <!-- Button trigger modal -->
  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Suppression</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          Voulez-vous supprimer cette catégorie?
        </div>
        <div class="modal-footer">
            <form action="" method="post">
                @csrf
                @method('DELETE')
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annuler</button>
                <button type="submit" class="btn btn-danger">Supprimer</button>
            </form>
        
        </div>
      </div>
    </div>
  </div>
    </div>
@endsection

