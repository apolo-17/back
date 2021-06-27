@extends('layouts.app')
@section('content')
<div class="container d-flex flex-row-reverse">
    <a class="btn btn-primary mb-4" href="{{route('job-title.create')}}" role="button">Agregar Puesto laboral</a>
</div>
    <index-job-title :job_titles="{{$job_titles}}"/>
@endsection