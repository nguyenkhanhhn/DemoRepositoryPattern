@extends('home')
@section('content')
    <form method="post" action="{{route('student.store')}}">
        @csrf
        <h1>Thêm mới một học sinh</h1>
        <label>Name</label><br>
        <input type="text" name="name"><br>
        <label>Email</label><br>
        <input type="text" name="email"><br>
        <label>Age</label><br>
        <input type="text" name="age"><br>
        <label>Address</label><br>
        <input type="text" name="address"><br>
        <button type="submit">Creat</button>
    </form>

@endsection
