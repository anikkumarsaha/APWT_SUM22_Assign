@extends('layouts.loggedIn')
@section('content')
    <hr>
    <table>
        <tr height="50px">
            <td width="100px">Name:</td>
            <td width="100px">{{$user->name}}</td>
        </tr>

        <tr height="50px">
            <td>Email:</td>
            <td>{{$user->email}}</td>
        </tr>

        <tr height="50px">
            <td>Role:</td>
            <td>{{$user->type}}</td>
        </tr>
    </table>
    <hr>
@endsection
