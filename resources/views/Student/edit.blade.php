@extends('home')
@section('content')
    <form method="post" action="{{route('student.update',$student->id)}}">
        @csrf
        <h1>Chỉnh sửa một học sinh</h1>
        <label>Name</label><br>
        <input type="text" name="name" value="{{$student->name}}"><br>
        <label>Email</label><br>
        <input type="text" name="email" value="{{$student->email}}"><br>
        <label>Age</label><br>
        <input type="text" name="age" value="{{$student->age}}"><br>
        <label>Address</label><br>
        <input type="text" name="address" value="{{$student->address}}"><br>
        <button type="submit">Update</button>
    </form>

@endsection
