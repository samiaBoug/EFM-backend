<?php

namespace Modules\PkgWidget\App\Services;

class RuleService
{
    public function evaluate(string $expression, array $data): bool
    {
        // Vérifier que toutes les clés sont valides
        foreach ($data as $key => $value) {
            if (!preg_match('/^[a-zA-Z_][a-zA-Z0-9_]*$/', $key)) {
                throw new \InvalidArgumentException("Clé invalide : {$key}");
            }
        }

        // Extraire les clés du tableau en variables
        extract($data);

        // Exécuter l'évaluation de manière sécurisée
        try {
            return eval("return {$expression};");
        } catch (\Throwable $e) {
            return false; // En cas d'erreur, on renvoie false
        }
    }
}


// class AlertService
// {
//     public function getProduitsEnAlerte()
//     {
//         $produits = Produit::all();
//         $rules = Rule::all();
//         $ruleEngine = App::make('RuleEngine');
        
//         return $produits->filter(function ($produit) use ($rules, $ruleEngine) {
//             foreach ($rules as $rule) {
//                 if ($ruleEngine->evaluate($rule->expression, $produit->toArray())) {
//                     return true;
//                 }
//             }
//             return false;
//         });
//     }
// }