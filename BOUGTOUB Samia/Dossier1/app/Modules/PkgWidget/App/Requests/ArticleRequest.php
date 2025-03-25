<?php

namespace Modules\PkgWidget\App\Requests;

use Illuminate\Foundation\Http\FormRequest;

class WidgetRequest extends FormRequest
{
    public function rules()
    {
        return [
            'method' => 'required',
            'type' => 'in:number,list',
        ];
    }
}


