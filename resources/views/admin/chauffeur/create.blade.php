@extends('layouts.admin')
@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h2> Ajout Chauffeurs
                    <a href="{{ url('admin/chauffeur')}}" class="btn btn-primary btn-sm float-end">Retour</a>
                </h2>
            </div>
            <div class="card-body">
                <form action="{{url('admin/chauffeur')}}" method="POST"  enctype="multipart/form-data">
                    @csrf
                    <div class="row"></div>
                    <div class="col-md-6 mb-3">
                        <label for="">Prenom</label>
                        <input type="text" name="prenom" class="form-control">
                        @error('prenom')
                            <small class="text-danger">{{$message}}</small>
                        @enderror
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="">Nom</label>
                        <input type="text" name="nom" class="form-control">
                        @error('nom')
                            <small class="text-danger">{{$message}}</small>
                        @enderror
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="">Telephone</label>
                        <input type="text" name="tel" class="form-control">
                        @error('number')
                            <small class="text-danger">{{$message}}</small>
                        @enderror
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="">Adresse</label>
                        <input type="texte" name="adresse" class="form-control">
                        {{-- <img src="{{asset('/uploads/chauffeur/'.$chauffeur->image)}}" width="60px" height="60px" alt=""> --}}
                        @error('adresse')
                            <small class="text-danger">{{$message}}</small>
                        @enderror
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="">Image</label>
                        <input type="file" name="image" class="form-control">
                        @error('image')
                            <small class="text-danger">{{$message}}</small>
                        @enderror
                    </div>
                    <div class="col-md-12 mb-3">
                        <button type="submit" class="btn btn-primary float-end">Valider</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection