@extends('layouts.league')

@section('title')
Create Match
@endsection

@section('content')
<form method="POST" action="{{ route('matches.store') }}">
    @csrf

    <label for="id_home_team">Home Team:</label>
    <select id="id_home_team" name="id_home_team" required>
        @foreach($teams as $team)
            <option value="{{ $team->team_id }}">{{ $team->team_name }}</option>
        @endforeach
    </select>
    <br><br>

    <label for="id_away_team">Away Team:</label>
    <select id="id_away_team" name="id_away_team" required>
        @foreach($teams as $team)
            <option value="{{ $team->team_id }}">{{ $team->team_name }}</option>
        @endforeach
    </select>
    <br><br>

    <label for="match_date">Match Date:</label>
    <input type="date" id="match_date" name="match_date" required>
    <br><br>

    <label for="home_team_goals">Home Team Goals:</label>
    <input type="number" name="home_goals" min="0">
    <br><br>

    <label for="away_team_goals">Away Team Goals:</label>
    <input type="number"  name="away_goals" min="0">
    <br><br>

    <button type="submit">Create Match</button>
</form>
@endsection

