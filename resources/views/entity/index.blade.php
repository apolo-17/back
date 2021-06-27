@extends('layouts.app')
@section('content')
<div class="container d-flex flex-row-reverse">
    <a class="btn btn-primary mb-4" href="{{route('entity.create')}}" role="button">Agregar Entidad</a>
</div>
    <index-entity :entities="{{$entities}}"/>
@endsection