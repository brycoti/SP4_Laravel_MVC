<?php
// app/Http/Controllers/MatchController.php

namespace App\Http\Controllers;

use App\Models\Team;
use App\Models\Matches;
use Illuminate\Http\Request;
use App\Http\Requests\StoreTeam;

class MatchController extends Controller
{
    public function index()
    {
        $matches = Matches::orderBy('match_id', "desc")->paginate(10);
        $matchesNames = Matches::with(['homeTeam', 'awayTeam'])->get();

        return view('matches.indexMatches', compact('matches'));
    }

    public function create()
    {
        $teams = Team::all();

        return view('matches.createMatches', compact('teams'));
    }


    public function store(StoreTeam $request){

        // Check if both team goals are provided, then set the status to "Finished"
        if (!is_null($request->home_goals) && !is_null($request->away_goals) ) {
            $request->merge(['status' => 'Finished']);
        } else {
            $request->merge(['status' => 'Scheduled']);
        }

        // Determine match result based on goals
        $matchResult = null; // This will be null if the status isn't "Finished"

        if ($request->status === 'Finished') {
            if ($request->home_goals > $request->away_goals) {
                $matchResult = 'Home Team Win';
            } elseif ($request->home_goals < $request->away_goals) {
                $matchResult = 'Away Team Win';
            } elseif (!is_null($request->home_goals) && !is_null($request->away_goals) && $request->home_goals == $request->away_goals) {
                // Check for draw only if goals are not null and are equal
                $matchResult = 'Draw';
            }
        }

        $match = Matches::create([
            'id_home_team' => $request->id_home_team,
            'id_away_team' => $request->id_away_team,
            'time' => $request->match_date,
            'home_team_goals'=> $request->home_goals,
            'away_team_goals'=>$request->away_goals,
            'match_result' => $matchResult,
            'status' => $request->status,
        ]);

        $homeTeam = Team::find($request->id_home_team);
        $awayTeam = Team::find($request->id_away_team);

        if($request->status === 'Finished') {
            // Update Goals For and Against
            $homeTeam->goals_for += $request->home_goals;
            $homeTeam->goals_against += $request->away_goals;

            $awayTeam->goals_for += $request->away_goals;
            $awayTeam->goals_against += $request->home_goals;

            // Update Wins, Draws, Losses, and Points
            if ($request->home_goals > $request->away_goals) {
                $homeTeam->wins += 1;
                $homeTeam->points += 3;

                $awayTeam->losses += 1;
            } elseif ($request->home_goals < $request->away_goals) {
                $awayTeam->wins += 1;
                $awayTeam->points += 3;

                $homeTeam->losses += 1;
            } elseif (!is_null($request->home_goals) && !is_null($request->away_goals) && $request->home_goals == $request->away_goals) {
                // Update for draw only if goals are not null and are equal
                $homeTeam->draws += 1;
                $awayTeam->draws += 1;

                $homeTeam->points += 1;
                $awayTeam->points += 1;
            }
        }
        $homeTeam->save();
        $awayTeam->save();

        return redirect()->route('matches.show', $match);
    }

    public function show(Matches $match, Team $team)
    {
        return view ('matches.showMatches', compact('match', 'team'));
    }

    public function edit(Matches $match)
    {
        $teams = Team::all();
        return view ('matches.editMatches', compact('match', 'teams'));
    }

    public function update(StoreTeam $request, Matches $match)
    {
        // Step 1: Revert the old values
        $oldHomeGoals = $match->home_team_goals;
        $oldAwayGoals = $match->away_team_goals;
        $oldMatchResult = $match->match_result;

        $homeTeam = Team::find($match->id_home_team);
        $awayTeam = Team::find($match->id_away_team);

        // Revert goals for and against
        $homeTeam->goals_for -= $oldHomeGoals;
        $homeTeam->goals_against -= $oldAwayGoals;

        $awayTeam->goals_for -= $oldAwayGoals;
        $awayTeam->goals_against -= $oldHomeGoals;

        // Revert Wins, Draws, Losses, and Points
        switch($oldMatchResult) {
            case 'Home Team Win':
                $homeTeam->wins -= 1;
                $homeTeam->points -= 3;
                $awayTeam->losses -= 1;
                break;
            case 'Away Team Win':
                $awayTeam->wins -= 1;
                $awayTeam->points -= 3;
                $homeTeam->losses -= 1;
                break;
            case 'Draw':
                $homeTeam->draws -= 1;
                $awayTeam->draws -= 1;
                $homeTeam->points -= 1;
                $awayTeam->points -= 1;
                break;
        }

        // Step 2: Apply the new values (similar to the store method)

        if (!is_null($request->home_goals) && !is_null($request->away_goals) ) {
            $request->merge(['status' => 'Finished']);
        } else {
            $request->merge(['status' => 'Scheduled']);
        }

        // Determine match result based on goals
        $matchResult = null;
        if ($request->status === 'Finished') {
            if ($request->home_goals > $request->away_goals) {
                $matchResult = 'Home Team Win';
            } elseif ($request->home_goals < $request->away_goals) {
                $matchResult = 'Away Team Win';
            } elseif (!is_null($request->home_goals) && !is_null($request->away_goals) && $request->home_goals == $request->away_goals) {
                $matchResult = 'Draw';
            }
        }

        // Save the new match values
        $match->update([
            'id_home_team' => $request->id_home_team,
            'id_away_team' => $request->id_away_team,
            'time' => $request->match_date,
            'home_team_goals' => $request->home_goals,
            'away_team_goals' => $request->away_goals,
            'match_result' => $matchResult,
            'status' => $request->status,
        ]);

        // Apply the new goals, wins, losses, draws, and points to the teams
        if ($request->status === 'Finished') {
            $homeTeam->goals_for += $request->home_goals;
            $homeTeam->goals_against += $request->away_goals;

            $awayTeam->goals_for += $request->away_goals;
            $awayTeam->goals_against += $request->home_goals;

            switch($matchResult) {
                case 'Home Team Win':
                    $homeTeam->wins += 1;
                    $homeTeam->points += 3;
                    $awayTeam->losses += 1;
                    break;
                case 'Away Team Win':
                    $awayTeam->wins += 1;
                    $awayTeam->points += 3;
                    $homeTeam->losses += 1;
                    break;
                case 'Draw':
                    $homeTeam->draws += 1;
                    $awayTeam->draws += 1;
                    $homeTeam->points += 1;
                    $awayTeam->points += 1;
                    break;
            }
        }

        $homeTeam->save();
        $awayTeam->save();

        return redirect()->route('matches.show', $match);
    }


    public function destroy(Matches $match) {

        $homeTeam = Team::find($match->id_home_team);
        $awayTeam = Team::find($match->id_away_team);

        if($match->status === 'Finished') {
            // Revert Goals For and Against
        $homeTeam->goals_for -= $match->home_team_goals;
        $homeTeam->goals_against -= $match->away_team_goals;

        $awayTeam->goals_for -= $match->away_team_goals;
        $awayTeam->goals_against -= $match->home_team_goals;

        // Revert Wins, Draws, Losses, and Points
        if ($match->match_result === 'Home Team Win') {
            $homeTeam->wins -= 1;
            $homeTeam->points -= 3;
            $awayTeam->losses -= 1;
        } elseif ($match->match_result === 'Away Team Win') {
            $awayTeam->wins -= 1;
            $awayTeam->points -= 3;
            $homeTeam->losses -= 1;
        } else { // Draw
            $homeTeam->draws -= 1;
            $awayTeam->draws -= 1;
            $homeTeam->points -= 1;
            $awayTeam->points -= 1;
        }
        }

        $homeTeam->save();
        $awayTeam->save();

            // Now delete the match
            $match->delete();

            return redirect()->route('matches.index');
        }
}
