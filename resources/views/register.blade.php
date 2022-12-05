<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
    <body class="antialiased">
        <form method="POST" action="{{ route('jwtRegister') }}">
            @csrf
            <div class="form-group mb-3">
                <input type="text" placeholder="Name" id="name" class="form-control" name="name" required autofocus>
            </div>
            <div class="form-group mb-3">
                <input type="text" placeholder="Email" id="email" class="form-control" name="email" required autofocus>
            </div>
            <div class="form-group mb-3">
                <input type="password" placeholder="Password" id="password" class="form-control" name="password" required>
            </div>
            <div class="d-grid mx-auto">
                <button type="submit" class="btn btn-dark btn-block">Signin</button>
            </div>
        </form>
    </body>
</html>
