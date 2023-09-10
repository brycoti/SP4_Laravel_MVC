<?php

namespace App\Http\Controllers;
use App\Models\Team;
use Illuminate\Http\Request;

class TeamController extends Controller
{
    public function index()
    {
        $teams = Team::paginate(5);

        return view ('teams.indexTeams', compact('teams'));
    }

    public function create()
    {
        return "Aquí va el create de equipos de fútbol";
    }

    public function show($id){
        $team = Team::find($id);
        return view ('teams.showTeams', compact('team'));
    }

    public function edit($id)
    {
        return "Aquí se edita el equipo de fútbol con ID: $id";
    }

    public function destroy($id)
    {
        return "Aquí se elimina el equipo de fútbol con ID: $id";
    }
}
