@extends('layouts.league')

@section('title')
Update Match {{$match->match_id}}
@endsection

@section('content')


<form method="POST" action="{{route('matches.update', $match->match_id)}}">
    @csrf
    @method('put')

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
    <input type="date" id="match_date" name="match_date">
    <br><br>

    <label for="home_team_goals">Home Team Goals:</label>
    <input type="number" name="home_goals" min="0">
    <br><br>

    <label for="away_team_goals">Away Team Goals:</label>
    <input type="number"  name="away_goals" min="0">
    <br><br>

    <label for="status">Match Status:</label>
<select id="status" name="status" required>
    <option value="Scheduled">Scheduled</option>
    <option value="In Progress">In Progress</option>
    <option value="Finished">Finished</option>
</select>
<br><br>

    <button type="submit">Update Match</button>
</form>


@endsection
