<?php

namespace Modules\PkgWidget\App\Services ;

use App\Models\Apprenant;

class WidgetService{

    public function getNombreApprenant(){
        $count = Apprenant::count();
        return [
            'title'=> 'nombre des apprenants',
            'value'=> $count
        ];
    }

    public function getApprenantsActifs(){
        $list = Apprenant::where('active', true)->get();
        $total = $list->count();
        return [
            'title' => 'Apprenants actifs',
            'list' => $list, 
            'total' => $total
        ];
    }
    }
