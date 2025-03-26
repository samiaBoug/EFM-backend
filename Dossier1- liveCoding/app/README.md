<?php

// ========================================
// 📌 PAGINATION
// ========================================
$posts = Post::paginate(10); // 10 éléments par page
$posts = Post::simplePaginate(10); // Sans liens avancés
$posts = Post::cursorPaginate(10); // Meilleure perf avec curseur

// Affichage dans Blade
{{ $posts->links() }}

// ========================================
// 🎯 FILTRES & RECHERCHE
// ========================================
$posts = Post::query();

if (request()->filled('category')) {
    $posts->where('category_id', request('category'));
}
if (request()->filled('search')) {
    $posts->where('title', 'like', '%' . request('search') . '%');
}

$posts = $posts->paginate(10);

// Utilisation d'un Scope
class Post extends Model {
    public function scopeFilter($query, $filters) {
        return $query->when($filters['category'] ?? null, fn($q, $category) => $q->where('category_id', $category))
                     ->when($filters['search'] ?? null, fn($q, $search) => $q->where('title', 'like', "%{$search}%"));
    }
}

// Utilisation
$posts = Post::filter(request()->only(['category', 'search']))->paginate(10);

// ========================================
// 🌍 GESTION MULTILINGUE
// ========================================
// Récupérer une traduction
__('messages.welcome');

// Fichier de traduction : lang/fr/messages.php
return ['welcome' => 'Bienvenue sur notre site !'];

// Changer la langue
App::setLocale('fr');
session(['locale' => 'fr']);

// Charger la langue automatiquement (AppServiceProvider.php)
public function boot() {
    App::setLocale(session('locale', config('app.locale')));
}

// ========================================
// 📤 IMPORT / EXPORT (Laravel Excel)
// ========================================
// Installation : composer require maatwebsite/excel
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\UsersExport;
use App\Imports\UsersImport;

// Exporter
return Excel::download(new UsersExport, 'users.xlsx');

// Classe d'export (app/Exports/UsersExport.php)
namespace App\Exports;
use App\Models\User;
use Maatwebsite\Excel\Concerns\FromCollection;
class UsersExport implements FromCollection {
    public function collection() { return User::all(); }
}

// Importer
Excel::import(new UsersImport, request()->file('file'));

// Classe d'import (app/Imports/UsersImport.php)
namespace App\Imports;
use App\Models\User;
use Maatwebsite\Excel\Concerns\ToModel;
class UsersImport implements ToModel {
    public function model(array $row) {
        return new User([ 'name' => $row[0], 'email' => $row[1], 'password' => bcrypt($row[2]) ]);
    }
}


