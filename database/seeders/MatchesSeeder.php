<?php

namespace Database\Seeders;

use App\Models\Matches;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;

class MatchesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Matches::insert([
            [
                'time' => Carbon::now()->subDays(10),
                'id_home_team' => 1,
                'id_away_team' => 2,
                'home_team_goals' => 0,
                'away_team_goals' => 0,
                'match_result' => 'Draw',
                'Status' => 'Finished',
                
            ],
            [
                'time' => Carbon::now()->subDays(10),
                'id_home_team' => 3,
                'id_away_team' => 4,
                'home_team_goals' => 2,
                'away_team_goals' => 1,
                'match_result' => 'Home Team Win',
                'Status' => 'Finished',
                
            ],
            [
                'time' => Carbon::now(),
                'id_home_team' => 5,
                'id_away_team' => 4,
                'home_team_goals' => 3,
                'away_team_goals' => 0,
                'match_result' => null,
                'Status' => 'In Progress',
               
            ],
            [
                'time' => Carbon::now()->addDays(2),
                'id_home_team' => 1,
                'id_away_team' => 3,
                'home_team_goals' => 0,
                'away_team_goals' => 0,
                'match_result' => null,
                'Status' => 'Scheduled',
              
            ],
            [
                'time' => Carbon::now()->addDays(4),
                'id_home_team' => 2,
                'id_away_team' => 4,
                'home_team_goals' => 0,
                'away_team_goals' => 0,
                'match_result' => null,
                'Status' => 'Scheduled',
                
            ],
            [
                'time' => Carbon::now()->addDays(6),
                'id_home_team' => 5,
                'id_away_team' => 2,
                'home_team_goals' => 0,
                'away_team_goals' => 0,
                'match_result' => null,
                'Status' => 'Scheduled',
                
            ],


        ]);
    }
}
