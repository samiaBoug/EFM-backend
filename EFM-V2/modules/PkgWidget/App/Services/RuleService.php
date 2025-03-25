<?php
namespace Modules\PkgWidget\App\Services;

class RuleService
{
    public function evaluate(string $expression, array $data): bool
    {
        // Remplacer les variables par leurs valeurs en utilisant une expression régulière
        foreach ($data as $key => $value) {
            // Remplacer chaque clé dans l'expression avec sa valeur
            $expression = preg_replace("/\b$key\b/", $value, $expression);
        }

        return eval("return $expression;");
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