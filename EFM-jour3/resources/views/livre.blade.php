<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</head>
<body>
    <h2>Ajouter un Livre : </h2>
    <form action="{{ route('livre.store')}}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="" class="form-label">Titre : </label>
            <input type="text" name="titre" class="form-control" id="" >
            <span></span>
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Auteur : </label>
            <input type="text" name="auteur" class="form-control" id="" >
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Nombre des pages : </label>
            <input type="number" name="nombre_pages" class="form-control" id="" >
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Catégorie : </label>
            <input type="text" name="categorie" class="form-control" id="" >
        </div>
        <button type="submit" class="btn btn-primary">Ajouter</button>

    </form>
    <div>
    <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Titre</th>
      <th scope="col">Auteur</th>
      <th scope="col">Nombre des pages</th>
      <th scope="col">Catégorie</th>

    </tr>
  </thead>
  <tbody>
    @foreach($livres as $livre)
    <tr>
      <td>{{$livre->id}}</td>
      <td>{{$livre->titre}}</td>
      <td>{{$livre->auteur}}</td>
      <td>{{$livre->nombre_pages}}</td>
      <td>{{$livre->categorie}}</td>
    </tr>
    @endforeach
  </tbody>
</table>
<div>{{ $livres->links() }}</div>

<div></div>
    </div>
</body>
</html>