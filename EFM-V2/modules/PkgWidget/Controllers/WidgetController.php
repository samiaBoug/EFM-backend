<?php
namespace Modules\PkgWidget\Controllers ;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Modules\PkgWidget\App\Services\WidgetService;

class WidgetController extends Controller{

    protected $widgetService ;
    public function __construct(WidgetService $widgetService)
    {
        $this->widgetService = $widgetService ;
    }

    public function excute(Request $request){
        try {
            $method = $request->input('method_name');
  
            if (!method_exists($this->widgetService, $method)) {
                throw new \InvalidArgumentException("La méthode '$method' n'existe pas.");
            }
  
            // Exécuter la méthode dynamiquement
            $result = call_user_func([$this->widgetService, $method]);
  
            return view('pkgWidget::test', compact('result'));
  
        } catch (\InvalidArgumentException $e) {
            return redirect()->back()->with('error', $e->getMessage());
        } catch (\Throwable $e) {
            return redirect()->back()->with('error', "Une erreur est survenue lors de l'exécution.");
        }
    }
    }
