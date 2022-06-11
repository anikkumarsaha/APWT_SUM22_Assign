@extends('layouts.loggedIn')
@section('content')
    <hr>
    <center>
        <h1>User Dashboard</h1>
    </center>
    <hr>
    <table border="1">
        <tr height="50px">
            <th width="100px">Id</th>
            <th width="100px">Name</th>
        </tr>

        @foreach($users as $us)
            <tr height="50px">
                <td>{{$us->id}}</td>
                <td><a href="{{route('user.details',['id'=>$us->id])}}">{{$us->name}}</a></td>
            </tr>
        @endforeach
    </table>
    <hr>
@endsection