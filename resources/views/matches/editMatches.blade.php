@extends('layouts.league')

@section('title', 'Update Match')

@section('content')
<div class="py-12 h-full">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

        <!-- Form header -->
        <div class="bg-blue-600 text-white p-6 mb-6 rounded focus:outline-none">
            <h1 class="text-2xl font-semibold text-center">Update Match #{{ $match->match_id }}</h1>
        </div>

        <!-- Display Errors -->
        @if ($errors->any())
        <div class="alert alert-danger mb-6 p-4 bg-red-200 text-red-700 border rounded">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif

        <!-- Form body -->
        <div class="p-4 sm:p-8 mb-6 bg-blue-100 shadow sm:rounded-lg flex items-center justify-center">
            <form method="POST" action="{{ route('matches.update', $match->match_id) }}" class="max-w-xl">
                @csrf
                @method('PUT')

                <!-- Home Team -->
                <div class="mb-6">
                    <label for="id_home_team" class="block text-xl text-black-600 mb-2">
                        Home Team:
                    </label>
                    <select id="id_home_team" name="id_home_team" required class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md">
                        @foreach($teams as $team)
                            <option value="{{ $team->team_id }}" 
                                {{ old('id_home_team', $match->id_home_team) == $team->team_id ? 'selected' : '' }}>
                                {{ $team->team_name }}
                            </option>
                        @endforeach
                    </select>
                </div>

                <!-- Away Team -->
                <div class="mb-6">
                    <label for="id_away_team" class="block text-xl text-black-600 mb-2">
                        Away Team:
                    </label>
                    <select id="id_away_team" name="id_away_team" required class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md">
                        @foreach($teams as $team)
                            <option value="{{ $team->team_id }}" 
                                {{ old('id_away_team', $match->id_away_team) == $team->team_id ? 'selected' : '' }}>
                                {{ $team->team_name }}
                            </option>
                        @endforeach
                    </select>
                </div>

                <!-- Match Date -->
                <div class="mb-6">
                    <label for="match_date" class="block text-xl text-black-600 mb-2">Match Date:</label>
                    <input type="datetime-local" id="match_date" name="match_date" value="{{ old('match_date',  date('Y-m-d\TH:i', strtotime($match->time))) }}" class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md">
                </div>

                <!-- Home Team Goals -->
                <div class="mb-6">
                    <label for="home_team_goals" class="block text-xl text-black-600 mb-2">Home Team Goals:</label>
                    <input type="number" name="home_goals" min="0" value="{{ old('home_goals', $match->home_team_goals) }}" class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md">
                </div>

                <!-- Away Team Goals -->
                <div class="mb-6">
                    <label for="away_team_goals" class="block text-xl text-black-600 mb-2">Away Team Goals:</label>
                    <input type="number" name="away_goals" min="0" value="{{ old('away_goals', $match->away_team_goals) }}" class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md">
                </div>

                <!-- Submit Button -->
                <div class="px-4 mt-4">
                    <button type="submit" class=" text-xl inline-flex px-4 py-2 border border-transparent text-sm font-medium rounded-md shadow-sm text-white bg-indigo-600 hover:bg-indigo-800 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 transition duration-150 ease-in-out">
                        Update Match
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
