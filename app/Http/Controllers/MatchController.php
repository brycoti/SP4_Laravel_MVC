<?php
// app/Http/Controllers/MatchController.php

namespace App\Http\Controllers;
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
        // Lógica para mostrar el formulario de creación de partidos
    }

    public function store(Request $request)
    {
        // Lógica para guardar un nuevo partido en la base de datos
    }

    public function show(Matches $match)
    {
        return view ('matches.showMatches', compact('match'));
    }

    public function edit($id)
    {
        // Lógica para mostrar el formulario de edición de un partido
    }

    public function update(Request $request, $id)
    {
        // Lógica para actualizar los datos de un partido en la base de datos
    }

    public function destroy(Matches $match){  
        $match->delete();

        return redirect()->route('matches.index');
    }
}
