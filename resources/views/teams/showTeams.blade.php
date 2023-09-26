@extends('layouts.league')


@section('title')
Team {{$team->team_name}}
@endsection

@section('content')

<div class="container mx-auto mt-8 px-4 h-screen">
    <h1 class="text-center text-3xl font-semibold mb-6">Welcome to Team:
        <span class="text-blue-600 italic">{{$team->team_name}}</span>
    </h1>

    <div class="shadow-lg rounded-lg overflow-hidden mb-6">
        <table class="min-w-full leading-normal bg-white">
            <thead class="bg-blue-600 text-white">
                <tr>
                    <th class="py-3 px-6">Points</th>
                    <th class="py-3 px-6">Goals For</th>
                    <th class="py-3 px-6">Goals Against</th>
                    <th class="py-3 px-6">Wins</th>
                    <th class="py-3 px-6">Losses</th>
                    <th class="py-3 px-6">Draws</th>
                    <th class="py-3 px-6">Matches Played</th>
                </tr>
            </thead>
            <tbody>
                <tr class="hover:bg-gray-100 transition duration-300">
                    <td class="py-3 px-6 border-b">{{ $team->points }}</td>
                    <td class="py-3 px-6 border-b">{{ $team->goals_for }}</td>
                    <td class="py-3 px-6 border-b">{{ $team->goals_against }}</td>
                    <td class="py-3 px-6 border-b">{{ $team->wins }}</td>
                    <td class="py-3 px-6 border-b">{{ $team->losses }}</td>
                    <td class="py-3 px-6 border-b">{{ $team->draws }}</td>
                    <td class="py-3 px-6 border-b">{{ $team->matches_played }}</td>
                </tr>
            </tbody>
        </table>
    </div>

    <div class="text-center">
        <!-- Edit Team Button -->
        <a href="{{route('teams.edit', $team)}}"
           class="inline-flex items-center bg-blue-600 text-white px-6 py-2 rounded hover:bg-blue-700 transition duration-300 mr-4">
           Edit Team
        </a>

        <!-- Delete Team Button -->
<form action="{{route('teams.destroy', $team)}}" method="POST" class="inline-block" onsubmit="return confirm('Are you sure you want to delete this team?');">
    @csrf
    @method('DELETE')
    <button type="submit" class="bg-red-600 text-white px-6 py-2 rounded hover:bg-red-700 transition duration-300">
        Delete
    </button>
</form>
</div>



@endsection
