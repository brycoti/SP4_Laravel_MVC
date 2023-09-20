<?php

namespace Database\Seeders;

use App\Models\Team;
use Illuminate\Database\Seeder;

class TeamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Team::insert([
            [
                'team_name' => 'Team A',
                'goals_for' => 0,
                'goals_against' => 0,
                'points' => 1,
                'wins' => 0,
                'losses' => 0,
                'draws' => 1,
                'matches_played' => 1,
            ],
            [
                'team_name' => 'Team B',
                'goals_for' => 0,
                'goals_against' => 0,
                'points' => 1,
                'wins' => 0,
                'losses' => 0,
                'draws' => 1,
                'matches_played' => 1,
            ],

            [
                'team_name' => 'Team C',
                'goals_for' => 2,
                'goals_against' => 1,
                'points' => 3,
                'wins' => 1,
                'losses' => 0,
                'draws' => 0,
                'matches_played' => 1, 
            ],

            [
                'team_name' => 'Team D',
                'goals_for' => 1,
                'goals_against' => 2,
                'points' => 0,
                'wins' => 0,
                'losses' => 1,
                'draws' => 0,
                'matches_played' => 1,  
            ],

            [
                'team_name' => 'Team E',
                'goals_for' => 0,
                'goals_against' => 0,
                'points' => 0,
                'wins' => 0,
                'losses' => 0,
                'draws' => 0,
                'matches_played' => 1, 
            ],
            [
                'team_name' => 'Team F',
                'goals_for' => 0,
                'goals_against' => 0,
                'points' => 0,
                'wins' => 0,
                'losses' => 0,
                'draws' => 0,
                'matches_played' => 1,
            ],
            [
                'team_name' => 'Team G',
                'goals_for' => 0,
                'goals_against' => 0,
                'points' => 0,
                'wins' => 0,
                'losses' => 0,
                'draws' => 0,
                'matches_played' => 0, 
            ],
            [
                'team_name' => 'Team H',
                'goals_for' => 0,
                'goals_against' => 0,
                'points' => 0,
                'wins' => 0,
                'losses' => 0,
                'draws' => 0,
                'matches_played' => 0,
            ],
            [
                'team_name' => 'Team I',
                'goals_for' => 0,
                'goals_against' => 0,
                'points' => 0,
                'wins' => 0,
                'losses' => 0,
                'draws' => 0,
                'matches_played' => 0,                
            ],
            [
                'team_name' => 'Team 1',
                'goals_for' => 0,
                'goals_against' => 0,
                'points' => 0,
                'wins' => 0,
                'losses' => 0,
                'draws' => 0,
                'matches_played' => 0,         
            ],
            [
                'team_name' => 'Team 2',
                'goals_for' => 0,
                'goals_against' => 0,
                'points' => 0,
                'wins' => 0,
                'losses' => 0,
                'draws' => 0,
                'matches_played' => 0,   
            ]
        ]);
    }
}