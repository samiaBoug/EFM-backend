<?php
namespace Modules\PkgWidget\App\Services ;



class WidgetService {

    public function getNombreApprenant(){
        // retourne un tableau ou un objet avec un titre et une valeur
        return [
            'title' => "Nombre total d’apprenants",
            'value' => 120,

        ];
    }
    public function getApprenantsActifs(){
        // retourne un titre, une liste de 5 apprenants et le nombre total
        return [
            'title' => 'Apprenants actifs',
            'list' => ['Alice', 'Bob', 'Charlie', 'David', 'Eve'], // Liste fictive
            'total' => 5
        ];
    }
}