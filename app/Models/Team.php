<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    protected $primaryKey = 'team_id';
    public $timestamps = false;

    //protected $fillable = ['team_name'];
    protected $guarded = [];

    // public $timestamps = false;
    use HasFactory;

    public function homeMatches () {
        return $this->hasMany(Matches::class, 'id_home_team', 'team_id');
    }

    public function awayMatches() {
        return $this->hasMany(Matches::class, 'id_away_team', 'team_id');
    }

    public function addGoals($goalsFor, $goalsAgainst)
    {
        $this->goals_for += $goalsFor;
        $this->goals_against += $goalsAgainst;
    }

    public function recordWin()
    {
        $this->wins += 1;
        $this->points += 3;
    }

    public function recordLoss()
    {
        $this->losses += 1;
    }

    public function recordDraw()
    {
        $this->draws += 1;
        $this->points += 1;
    }
}
