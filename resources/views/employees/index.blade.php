@extends('layouts.app')
@section('content')
<div class="container d-flex flex-row-reverse">
    <a class="btn btn-primary mb-4" href="{{route('employee.create')}}" role="button">Agregar trabajador</a>
</div>
<index-employee :employees="{{$employees}}"/>
@endsection