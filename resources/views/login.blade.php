<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <link rel="stylesheet" href="{{ URL::asset("src/index.css") }}">

</head>
<body>

    @component("components.layout.header")
    @endcomponent

    <main class="container">

        <form action="/login/makeLogin" method="POST">

            @csrf

            <div class="mb-3">

              <label for="exampleInputEmail1" class="form-label">Email</label>
              <input type="email" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp">

            </div>

            <div class="mb-3">

              <label for="exampleInputPassword1" class="form-label">Senha</label>
              <input type="password" class="form-control" name="password" id="exampleInputPassword1">

            </div>

            <button type="submit" class="btn btn-primary">Login</button>

          </form>

    </main>
    
</body>
</html>
