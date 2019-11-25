<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request)
    {   

    
   //borra la sesiones

  // $request->session()->flush();

 //guarda la session del usuario logueado
   // $request->session()->flash('leonardo' , 'administrador');

    //mantinene la sesion guardada
   // $request->session()->keep(['leonardo'=>'administrador']);

      
   //ramdnow del token id de la sesion


    
   $request->session()->regenerate();

   return view('home');

         // return $request->session()->all();
    }
}
