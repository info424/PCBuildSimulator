<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contact</title>
</head>
<body>
<form action="{{ url('/contact-us') }}" method="post">
    @csrf <!-- {{ csrf_field() }} -->
    Name: <input type="text" name="name" value="{{ $name }}"> <br>
    Email: <input type="text" name="email"> <br>
    <input type="submit" value="Contact us">
</form>
</body>
</html>
