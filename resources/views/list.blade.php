<!-- <h1>Members list</h1> -->

<table border="1">
    <tr>
        <td>S No</td>
        <td>Name</td>
        <td>Age</td>
        <td>Gender</td>
        <td>Phone</td>
        <td>E-Mail</td>
        <td>Comments</td>
        <td>Date</td>
    </tr>

    @foreach($name as $name)
    <tr>
        <td>{{$name['S No']}}</td>
        <td>{{$name['name']}}</td>
        <td>{{$name['age']}}</td>
        <td>{{$name['gender']}}</td>
        <td>{{$name['phone']}}</td>
        <td>{{$name['email']}}</td>
        <td>{{$name['desc']}}</td>
        <td>{{$name['date']}}</td>
    </tr>
    @endforeach

</table>