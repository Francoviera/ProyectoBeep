<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;

class PageController extends Controller
{
    public function productos(){       
        return view('productos');
    }
    public function contacto(){       
        return view('contacto');
    }
    public function welcome(){    
        $productos= App\Producto::get()->take(8);

        return view('welcome')->with('productos',$productos);

        
    }
    public function reparaciones(){       
        return view('reparaciones');
    }
    public function reparacion(){       
        return view('misreparaciones');
    }
}
