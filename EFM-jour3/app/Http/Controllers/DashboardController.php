<?php

namespace App\Http\Controllers;

use App\Models\Livre;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    //
    public function totaleLivre(){
      return   Livre::count();
    }
    public function lastLivres()
    {
       return Livre::orderBy('created_at', 'desc')->take(5)->get();
       
    }
    public function index(){
        $totale = $this->totaleLivre();
        $lastLivres = $this->lastLivres();
        return view('dashboard' , compact('totale', 'lastLivres'));
    }
}

