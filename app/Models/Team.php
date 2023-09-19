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
}
