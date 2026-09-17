<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create Student</title>
</head>
<body>
    <h1>Create Student</h1>

    <form action="/students" method="post">

        @csrf

        <label for="name">Name</label>
        <input type="text" name="name" id="">
        <br><br>
        <label for="name">Email</label>
        <input type="email" name="email" id="">
        <br><br>
        <label for="phone">Phone</label>
        <input type="phone" name="phone" id="">
        <br><br>
        <label for="department">Department</label>
        <input type="department" name="department" id="">
        <br><br>
        <label for="age">Age</label>
        <input type="age" name="age" id="">
        <br><br>

        <button type="submit"> Submit</button>

    </form>
</body>
</html>
