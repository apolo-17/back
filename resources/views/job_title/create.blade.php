@extends('layouts.app')
@section('content')
    <form-create-job-title :categories="{{ $categories }}" :importances="{{ $importances }}"/>
@endsection