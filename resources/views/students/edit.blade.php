<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Student</title>
</head>
<body>
    <h1>Edit Student</h1>
    <hr>
    <form action="/students/{{$student->id}}" method="post">
        @csrf
        @method('put')

        <label for="name">Name</label>
        <input type="text" name="name" value="{{$student->name}}">
        <br><br>
        <label for="email">Email</label>
        <input type="email" name="email" value="{{$student->email}}">
        <br><br>
        <label for="phone">Phone</label>
        <input type="text" name="phone" value="{{$student->phone}}">
        <br><br>
        <label for="department">Department</label>
        <input type="text" name="department" value="{{$student->department}}">
        <br><br>
        <label for="age">Age</label>
        <input type="number" name="age" value="{{$student->age}}">
        <br><br>
        <button type="submit"> Update Student</button>
    </form>
</body>
</html>
