<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel Form - Test</title>
</head>
<body>
    <h1>Laravel Form</h1>
    <form action="/test" method="post">
        @csrf
        <input type="text" name="name" placeholder="Enter your name"><br><br>
        <button type="submit">Submit</button>
    </form>
</body>
</html>