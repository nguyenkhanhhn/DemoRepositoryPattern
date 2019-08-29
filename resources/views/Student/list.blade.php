@extends ('home')
@section('content')
    <h1>List Student in my class</h1>
    <table border="1">
        <tr>
            <td>STT</td>
            <td>Name</td>
            <td>Email</td>
            <td>Age</td>
            <td>Address</td>
        </tr>
        @foreach($students as $key=>$student)
            <tr>
                <td>{{$student->id}}</td>
                <td>{{$student->name}}</td>
                <td>{{$student->email}}</td>
                <td>{{$student->age}}</td>
                <td>{{$student->address}}</td>
                <td>
                    <a href="{{route('student.edit',$student->id)}}">Update</a>
                    <a href="{{route('student.delete',$student->id)}}">Delete</a>
                </td>
            </tr>
        @endforeach
    </table>
    <a href="{{route('student.create')}}">Creat new student</a>
@endsection
