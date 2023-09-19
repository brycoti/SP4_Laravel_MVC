<?php
// app/Http/Controllers/MatchController.php

namespace App\Http\Controllers;

use App\Models\Team;
use App\Models\Matches;
use Illuminate\Http\Request;


class MatchController extends Controller
{
    public function index()
    {
        $matches = Matches::orderBy('match_id', "desc")->paginate(10);

        return view ('matches.indexMatches', compact('matches'));
    }

    public function create()
    {
        $teams = Team::all(); // Obtener todos los equipos
    
        return view('matches.createMatches', compact('teams'));
    }
    

    public function store(Request $request, Team $team)
    {
        $match = Matches::create([
            'id_home_team' => $request->id_home_team,
            'id_away_team' => $request->id_away_team

        ]); 
    
       return redirect()->route('matches.show', $match);
   
    }

    public function show(Matches $match)
    {
        return view ('matches.showMatches', compact('match'));
    }

    public function edit(Matches $match, Team $team)
    {
        // Lógica para mostrar el formulario de edición de un partido
    }

    public function update(Request $request, Team $team)
    {
        // Lógica para actualizar los datos de un partido en la base de datos
    }

    public function destroy(Matches $match){  
        $match->delete();

        return redirect()->route('matches.index');
    }
}
