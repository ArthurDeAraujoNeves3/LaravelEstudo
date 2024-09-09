<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <link rel="stylesheet" href="{{ URL::asset("src/index.css") }}">
</head>
<body>

    @component("components.layout.header")
    @endcomponent

    <main class="container">

        <p>Olá, {{$name}}</p>

        <section>

            @foreach ($projects as $project)

                
                
            @endforeach

            @if ( count($projects) == 0 )
                <p>Nada</p>
            @endif

        </section>

    </main>
    
</body>
</html>
