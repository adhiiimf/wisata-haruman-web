<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin - Login</title>
</head>
<body>
    <form method="POST" action="{{ route('auth.admin.logincheck') }}">
        @csrf
        <h1 class="">Admin Login</h1>

        <div class="">
            <input type="text" class="form-control" name="email" placeholder="email" required="required" autofocus>
            <label for="floatingName">Email or Username</label>
            @if ($errors->has('email'))
                <span class="">{{ $errors->first('email') }}</span>
            @endif
        </div>
        
        <div class="">
            <input type="password" class="form-control" name="password" placeholder="Password" required="required">
            <label for="floatingPassword">Password</label>
            @if ($errors->has('password'))
                <span class="">{{ $errors->first('password') }}</span>
            @endif
        </div>

        <button class="" type="submit">Login</button>
        
    </form>
</body>
</html>