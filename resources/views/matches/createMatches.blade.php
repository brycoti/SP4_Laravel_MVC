@extends('layouts.league')

@section('title')
Create Match
@endsection

@section('content')
<form method="POST" action="{{ route('matches.store') }}">
    @csrf

    <label for="id_home_team">Equipo local:</label>
    <select id="id_home_team" name="id_home_team" required>
        @foreach($teams as $team) <!-- Cambiado de $teams a $team -->
            <option value="{{ $team->team_id }}">{{ $team->team_name }}</option>
        @endforeach
    </select>

    <label for="id_away_team">Equipo visitante:</label>
    <select id="id_away_team" name="id_away_team" required>
        @foreach($teams as $team) <!-- Cambiado de $teams a $team -->
            <option value="{{ $team->team_id }}">{{ $team->team_name }}</option>
        @endforeach
    </select>

    <button type="submit">Guardar</button>
</form>
@endsection
