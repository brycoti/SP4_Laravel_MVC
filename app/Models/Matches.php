<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Matches extends Model
{
    use HasFactory;

    protected $table = "matches"; // match es una palabra reservada, asi me aseguro usar la tabla matches
    protected $primaryKey = 'match_id';
    protected $guarded = [];
    public $timestamps = false;

    public function homeTeam()
    {
        return $this->belongsTo(Team::class, 'id_home_team', 'team_id');
    }

    /**
     * Get the away team of the match.
     */
    public function awayTeam()
    {
        return $this->belongsTo(Team::class, 'id_away_team', 'team_id');
    }

    public function determineMatchResult($homeGoals, $awayGoals)
    {
        if ($homeGoals > $awayGoals) {
            return 'Home Team Win';
        } elseif ($homeGoals < $awayGoals) {
            return 'Away Team Win';
        } elseif (!is_null($homeGoals) && !is_null($awayGoals) && $homeGoals == $awayGoals) {
            return 'Draw';
        }
        return null;
    }
}
