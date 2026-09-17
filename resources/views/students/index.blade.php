<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Students</title>
</head>
<body>
    <h1>Students</h1>
    <a href="/students/create">Create Students</a>
    <hr>
    @foreach ($students as $student)
        <h2>{{$student->name}}</h2>

        <p>Email: {{$student->email}}</p>
        <p>Phone: {{$student->phone}}</p>
        <p>Department: {{$student->department}}</p>
        <p>Age: {{$student->age}}</p>

        <a href="/students/{{ $student->id }}"> View </a>
        <br>
        <br>

        <form action="/students/{{$student->id}}" method="post">

            @csrf
            @method('delete')

            <button type="submit">Delete</button>

        </form>


        <hr>
    @endforeach
</body>
</html>




