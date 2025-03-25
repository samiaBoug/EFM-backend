<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- ✅ Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">

    <title>Document</title>
</head>
<body class="bg-light">
    <div class="container mt-5">

        <form action="{{ route('excute')}}" method="POST" class="p-4 border rounded bg-white shadow">
            @csrf
            <label class="form-label fw-bold">Widget :</label>
            <input type="text" name="method_name" class="form-control mb-3" placeholder="Entrez le nom du widget">
            <button type="submit" class="btn btn-primary w-100"><i class="bi bi-plus-circle"></i> Ajouter</button>
        </form>

        @if(session('error'))
            <div class="alert alert-danger mt-3">{{ session('error') }}</div>
        @endif

        @if(isset($result))
            <div class="mt-4 p-3 bg-white rounded shadow">
                <h2 class="fw-bold text-primary">{{ $result['title'] }}</h2>
                @if(isset($result['value']))
                    <p class="fw-bold text-success fs-4">Valeur : {{ $result['value'] }}</p>
                @elseif(isset($result['list']))
                    <ul class="list-group mt-3">
                        @foreach($result['list'] as $apprenant)
                            <li class="list-group-item">
                                <i class="bi bi-person-circle"></i> {{ $apprenant->prenom }} {{ $apprenant->nom }}
                            </li>
                        @endforeach
                    </ul>
                    <p class="fw-bold mt-3 text-secondary">Total : {{ $result['total'] }}</p>
                @endif
            </div>
        @endif

        <!-- ✅ Bouton pour afficher le modal -->
        <button id="openModal" class="btn btn-success mt-4"><i class="bi bi-eye"></i> Afficher Modal</button>

    </div>

    <!-- ✅ Modal Bootstrap 5 -->
    <div id="myModal" class="modal fade" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Titre du Modal</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>Contenu du modal.</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-bs-dismiss="modal">OK</button>
                </div>
            </div>
        </div>
    </div>

    <!-- ✅ Script jQuery & Bootstrap 5 -->
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        $(document).ready(function () {
            let modal = new bootstrap.Modal(document.getElementById("myModal"));

            // ✅ Ouvrir le modal au clic sur le bouton
            $("#openModal").click(function () {
                modal.show();
            });

            // ✅ Message dans la console quand le modal est fermé
            $("#myModal").on("hidden.bs.modal", function () {
                console.log("Le modal a été fermé !");
            });
        });
    </script>

<!-- $(document).on('submit', '#productForm', function(e) {
        e.preventDefault();
        $.post('/produits/store', $(this).serialize(), function(response) {
            if (response.success) {
                location.reload();
            }
        });
    }); -->
</body>
</html>
