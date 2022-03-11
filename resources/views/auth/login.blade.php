<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <style type="text/css">
    body{
        background-color: lightblue;
    }
    form {
        border: 1px solid black;
    }
    </style>
</head>
<body>
    <div class="container">
        <form action="{{ route('loginProses') }}" method="post">
            @csrf
            <div class="form-group">
                <label for="">Email</label>
                <input type="email" class="form-control" id="" placeholder="Email" name="email">
              </div>
              <div class="form-group">
                <label for="">Password</label>
                <input type="password" class="form-control" id="" placeholder="Password" name="password">
              </div>
              <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</body>
</html>