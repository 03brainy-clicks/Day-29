<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
    <style>
        body {
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .cover{
            width: 30%;
            margin: 0px auto;
        }
        h1 {
            text-align: center;
        }
        .cover input {
            width: 100%;
        }

        .submit{
            background-color: green;
            color: white;
            padding: 10px 30px;

            border: none;
            border: green solid 1px;
        }
        .submit:hover{
            background-color:white;
            color: green;
            border: green solid 1px;
            padding: 10px 30px;

        }
        .reset:hover{
            background-color:white;
            color: blue;
            border:blue solid 1px;
            padding: 10px 30px;

        }
        .reset{
            background-color: blue;
            color: white;
            border: none;border:blue solid 1px;

            padding: 10px 30px;
        }

    </style>
</head>
<body>
<div class="cover">
<h2>Registration fom</h2>
<form action="data.php" method="POST">
    <div>
        <label for="name">Name</label> <br>
        <input type="text" name="name">
    </div>
    <br>
    <div>
        <label for="date">Date of Birth</label> <br>
        <input type="date" name="date">
    </div>
    <br>
    <div>
        <label for="profession">Profession</label> <br>
        <input type="text" name="profession">
    </div>
    <br>
    <div>
        <label for="gender">Gender</label> <br>
        <input type="radio" name="gender" value="Male"><br>
        <label for="male">Male</label><br>
        <input type="radio" name="gender" value="Female"><br>
        <label for="female">Female</label><br>
        <input type="radio" name="gender" value="Other"><br>
        <label for="other">Other</label><br>
    </div>
    <br>
    <div>
        <label for="email">Email</label><br>
        <input type="email" name="email">
    </div>
    <br>
    <div>
        <label for="mobile">Mobile no.</label><br>
        <input type="text">
    </div>
    <br>
    <div>
        <label for="password">Password</label><br>
        <input type="password" name="password">
    </div>
    <br>
    <div>
        <label for="password">Confirm Password</label><br>
        <input type="password" name="Cpassword">
    </div>
    <br>
    <div>
        <button type="submit" class="submit">Submit</button>
        <button type="reset" class="reset">Reset</button>

    </div>
</form>
</div>
</body>
</html>