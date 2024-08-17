<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <h1>Salvar </h1>
	    <div class="container">
        <form method="post" action="{{url('/salvar')}}">
            @csrf
            <label for="nome">Nome</label><br>
            <input  class="form-control" type="text" name="nome" id="nome" ><br><br><br>
            <label for="nome">KM</label><br>
            <input  class="form-control" type="number" name="km" id="km" ><br><br><br>
            <label for="nome">Data</label><br>
            <input  class="form-control" type="date" name="data" id="data" ><br><br><br>

            <input class="w-100 btn btn-primary btn-lg" name="salvar" type="submit">

        </form>

    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>