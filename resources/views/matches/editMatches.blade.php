@extends('layouts.league')

@section('title', 'Update Match')

@section('content')
<div class="container">
    <h2>Update Match #{{ $match->match_id }}</h2>

    <form method="POST" action="{{ route('matches.update', $match->match_id) }}">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="id_home_team">Home Team:</label>
            <select id="id_home_team" name="id_home_team" class="form-control" required>
                @foreach($teams as $team)
                    <option value="{{ $team->team_id }}" {{ $match->id_home_team == $team->team_id ? 'selected' : '' }}>
                        {{ $team->team_name }}
                    </option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="id_away_team">Away Team:</label>
            <select id="id_away_team" name="id_away_team" class="form-control" required>
                @foreach($teams as $team)
                    <option value="{{ $team->team_id }}" {{ $match->id_away_team == $team->team_id ? 'selected' : '' }}>
                        {{ $team->team_name }}
                    </option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="match_date">Match Date:</label>
            <input type="date" id="match_date" name="match_date" class="form-control" value="{{ old('match_date') }}">
        </div>

        @error('match_date')
        <br>
            <small>*{{$message}}</small>
        <br>
    @enderror

        <div class="form-group">
            <label for="home_team_goals">Home Team Goals:</label>
            <input type="number" id="home_team_goals" name="home_goals" class="form-control" value="{{ old('home_goals') }}">
        </div>

        @error('home_goals')
            <br>
                <small>*{{$message}}</small>
            <br>
        @enderror

        <div class="form-group">
            <label for="away_team_goals">Away Team Goals:</label>
            <input type="number" id="away_team_goals" name="away_goals" class="form-control" value="{{ old('away_team_goals') }}" >
        </div>

        @error('away_team_goals')
        <br>
            <small>*{{$message}}</small>
        <br>
    @enderror

        <button type="submit" class="btn btn-primary">Update Match</button>
    </form>
</div>
@endsection
