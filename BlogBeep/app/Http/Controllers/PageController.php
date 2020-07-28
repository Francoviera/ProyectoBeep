<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function productos(){       
        return view('productos');
    }
    public function contacto(){       
        return view('contacto');
    }
    public function welcome(){       
        return view('welcome');
    }
    public function reparaciones(){       
        return view('reparaciones');
    }
    public function reparacion(){       
        return view('misreparaciones');
    }
}
