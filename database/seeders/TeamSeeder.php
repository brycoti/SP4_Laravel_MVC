<?php

namespace Database\Seeders;

use App\Models\Team;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;

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
                'points' => 0,
                'wins' => 0,
                'losses' => 0,
                'draws' => 1,
                'matches_played' => 1,
                'deleted_at' => null  // Si quieres simular que un equipo está "eliminado", puedes poner: Carbon::now()
            ],
            [
                'team_name' => 'Team B',
                'goals_for' => 0,
                'goals_against' => 0,
                'points' => 0,
                'wins' => 0,
                'losses' => 0,
                'draws' => 1,
                'matches_played' => 1,
                'deleted_at' => null
            ],

        ]);
    }
}
