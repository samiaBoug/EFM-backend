<?php

namespace Modules\PkgWidget\Controllers ;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Modules\PkgWidget\App\Services\RuleService;

class RuleController extends Controller
{
    protected $ruleService;

    public function __construct(RuleService $ruleService)
    {
        $this->ruleService = $ruleService;
    }

    public function showPrototype()
    {
        $product = ['stock' => 2, 'prix' => 150];
        $rule = 'stock < 5 && prix > 100';
        $result = $this->ruleService->evaluate($rule, $product);

        return view('pkgWidget::prototype', compact('product', 'rule', 'result'));
    }
}
