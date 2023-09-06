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
                'match_id' => 1,
                'time' => Carbon::now()->subDays(10),  // Hace 10 días
                'id_home_team' => 1,
                'id_away_team' => 2,
                'home_team_goals' => 0,
                'away_team_goals' => 0,
                'match_result' => 'draw',  // Ejemplo de resultado
                'Status' => 'finished',
                'deleted_at' => null
            ],
        ]);
    }
}
