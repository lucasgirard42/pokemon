<?php

namespace App\Http\Controllers;

use App\Models\Items;
use App\Models\Moves;
use App\Models\Pokedex;
use App\Models\Pokedexes;
use App\Models\Types;
use App\Models\User;
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
    public function index()
    {
        // Je récupère tous les types de pokemon
         $pokedexes = Pokedexes::all();
       

        return view('home',[
            'pokedexes' => $pokedexes
        ]);
    }

    public function search(Request $request)
    {
        $search = $request->get('search');
        $pokedexe = Pokedexes::where('namefrench', 'like', '%' .$search. '%')
        ->orWhere('type0', 'like', '%' . $search . '%')
        ->paginate(20);
        return view('home',[
            'pokedexes' => $pokedexe
        ]);
    }

  
}
