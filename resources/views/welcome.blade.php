<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login Form</title>
</head>

<body>
    <h3>login Page</h3>
    <form action="">
        <input type="email" name="email" id="" placeholder="Enter Email"><br>
        <label for="">Password:</label>
        <input type="password" name="password" id=""><br>
        <input type="submit" name="login">
        <a href="{{ url('/newroute') }}">forget</a>
        <a href="{{ url('/register') }}">register</a>



    </form>

</body>

</html>
