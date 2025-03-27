<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
   
</head>
<body class="container">
    <!-- nombre totale des livres -->
    <div class="card m-2" style="width: 18rem;">
        <div class="card-header">
            Nombre totale des livres : 
        </div>
        <div>{{$totale}}</div>
    </div>
     <!-- 5 dernier livre ajouer  -->
     <div class="card m-2" style="width: 18rem;">
  <div class="card-header">
    Les dérnières livre ajoutées : 
  </div>
  <ul class="list-group list-group-flush">
    @foreach($lastLivres as $livre)
    <li class="list-group-item">
    <span class="badge text-bg-warning">{{$livre->categorie}}</span></h1>
        {{ $livre->titre }} - <small>{{$livre->auteur}}</small>
    </li>
    @endforeach
  </ul>
</div>
</body>
</html>