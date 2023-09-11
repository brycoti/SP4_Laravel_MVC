<?php

namespace App\Http\Controllers;
use App\Models\Team;
use Illuminate\Http\Request;

class TeamController extends Controller
{
    public function index()  {
        $teams = Team::orderBy('team_id', "desc")->paginate(10);

        return view ('teams.indexTeams', compact('teams'));
    }

    public function create()
    {
        return view ('teams.createTeams');
    }

    public function store(Request $request){
        $team = new Team();

        $team->team_name = $request->name;

        $team->save();

       return redirect()->route('teams.show', $team->team_id);
    }

    public function show($id){
        $team = Team::find($id);
        return view ('teams.showTeams', compact('team'));
    }

    public function edit($id)  {
        return "Aquí se edita el equipo de fútbol con ID: $id";
    }

    public function destroy($id)  {
        return "Aquí se elimina el equipo de fútbol con ID: $id";
    }
}
