@extends('layouts.admin')
@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h2> Modification de  Chauffeurs
                    <a href="{{ url('admin/chauffeur')}}" class="btn btn-primary btn-sm float-end">Retour</a>
                </h2>
            </div>
            <div class="card-body">
                <form action="{{url('admin/chauffeur/'.$chauffeur->id)}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="row"></div>
                    <div class="col-md-6 mb-3">
                        <label for="">Prenom</label>
                        <input type="text" name="prenom" value="{{$chauffeur->prenom}}" class="form-control">
                        @error('prenom')
                            <small class="text-danger">{{$message}}</small>
                        @enderror
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="">Nom</label>
                        <input type="text" name="nom" value="{{$chauffeur->nom}}" class="form-control">
                        @error('nom')
                            <small class="text-danger">{{$message}}</small>
                        @enderror
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="">Telephone</label>
                        <input type="text" name="tel" value="{{$chauffeur->tel}}" class="form-control">
                        @error('tel')
                            <small class="text-danger">{{$message}}</small>
                        @enderror
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="">Adresse</label>
                        <input type="text" name="adresse" value="{{$chauffeur->adresse}}" class="form-control">
                        @error('adresse')
                            <small class="text-danger">{{$message}}</small>
                        @enderror
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="">Image</label>
                        <input type="file" name="image" value="{{$chauffeur->image}}" class="form-control">
                        <img src="{{asset('/uploads/chauffeur/'.$chauffeur->image)}}" width="60px" height="60px" alt="">
                        @error('image')
                            <small class="text-danger">{{$message}}</small>
                        @enderror
                    </div>
                    <div class="col-md-12 mb-3">
                        <button type="submit" class="btn btn-primary float-end">Modifier</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection