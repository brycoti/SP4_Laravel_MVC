<?php

namespace App\Http\Controllers;

use App\Models\Team;
use Illuminate\Http\Request;
use App\Http\Requests\StoreTeam;


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

    public function store(StoreTeam $request){
        
        /*$request->validate([
            'team_name' => 'required|max:30|min:3'
        ]); */
        
        /*$team = new Team();
        $team->team_name = $request->name;
        $team->save(); */

        $team = Team::create([
            'team_name' => $request->team_name
        ]); 

       //$team = Team::create($request->all());
    
       return redirect()->route('teams.show', $team);
    }

    public function show(Team $team){
        return view ('teams.showTeams', compact('team'));
    }

    public function edit(Team $team)  {
        return view ('teams.editTeams', compact('team'));
    }

    public function update(StoreTeam $request, Team $team)  {
       
       
        /* $team->team_name = $request->name;
        $team->save(); */

        $team->update([
            'team_name' => $request->team_name
        ]);

        //$team = Team::create($request->all());
        
        return redirect()->route('teams.show', $team->team_id);
    }

    public function destroy(Team $team){  
        $team->delete();

        return redirect()->route('teams.index');
    }
}
