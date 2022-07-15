@extends('layouts.afterLoginLayoutAdmin')
@section('content')
    @foreach($CheckCustomersMovies as $cm)
        {{$cm->customersModel->username}} {{$cm->moviesModel->name}}<br>
    @endforeach
@endsection