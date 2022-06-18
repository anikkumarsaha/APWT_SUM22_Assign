@extends('layouts.main')
@section('content')
<form method="post" action="">
        {{@csrf_field()}}
        
        Username: <input type="text" name="name" placeholder="Name" value="{{old('name')}}"><br>
        @error('name')
            {{$message}}<br>
        @enderror

        Password: <input type="password" name="password" ><br>
        @error('password')
            {{$message}}<br>
        @enderror
        
        <input type="submit" value="Create">
    </form>
@endsection