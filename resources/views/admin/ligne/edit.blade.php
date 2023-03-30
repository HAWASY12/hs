@extends('layouts.admin')
@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h2> Modification de  Lignes
                    <a href="{{ url('admin/ligne')}}" class="btn btn-primary btn-sm float-end">Retour</a>
                </h2>
            </div>
            <div class="card-body">
                <form action="{{url('admin/ligne/'.$ligne->id)}}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="row"></div>
                    <div class="col-md-6 mb-3">
                        <label for="">Depart</label>
                        <input type="text" name="depart" value="{{$ligne->depart}}" class="form-control">
                        @error('depart')
                            <small class="text-danger">{{$message}}</small>
                        @enderror
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="">Destination</label>
                        <input type="text" name="destination" value="{{$ligne->destination}}" class="form-control">
                        @error('destination')
                            <small class="text-danger">{{$message}}</small>
                        @enderror
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="">Heure</label>
                        <input type="text" name="heure" value="{{$ligne->heure}}" class="form-control">
                        @error('hour')
                            <small class="text-danger">{{$message}}</small>
                        @enderror
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="">Prix</label>
                        <input type="number" name="prix" value="{{$ligne->prix}}" class="form-control">
                        @error('price')
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