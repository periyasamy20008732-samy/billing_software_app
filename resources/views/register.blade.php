<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register Form</title>
</head>

<body>
    <h4>Register Login</h4>
    <form action="">
        <label for="">name:</label>
        <input type="text" name="name" id=""><br>
        <label for="">mobile number:</label>
        <input type="number" name="mobile number" id=""><br>
        <label for="">email:</label>
        <input type="email" name="eamil" id=""><br>
        <label for="">address</label>
        <input type="text" name="address"><br>
        <label for="">password</label>
        <input type="password" name="password" id="">
        <a href="{{ url('/') }}">log in</a>


    </form>

</body>

</html>
