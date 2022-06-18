<h1>Department information:</h1>
<table>

    <tr>
        <td>Department name:</td>
        <td>{{$d_id->d_name}}</td>
    </tr>

    <tr>
        <td>Department ID:</td>
        <td>{{$d_id->d_id}}</td>
    </tr>

</table>

<h1>Offered courses:</h1>
<table>
    @foreach($d_id->courses as $co)
    <tr>
        <td>
            <h2>* {{$co->c_name}} ----------></h2>
        </td>

        <td>
            @foreach($co->teacherscourses as $tc)
            <h3>{{$tc->teachers->t_name}}</h3>
            @endforeach
        </td>
    </tr>

    <tr>
        <td>
            <h3>Students enrolled in the course:</h3>
            @foreach($co->studentscourses as $sc)
            {{$sc->students->s_name}} <br>
            @endforeach
        </td>
    </tr>
    @endforeach
</table>
