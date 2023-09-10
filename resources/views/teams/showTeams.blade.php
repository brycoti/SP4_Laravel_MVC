@extends('layouts.league')

@section('content')

<div class="container mx-auto mt-8 px-4 h-screen">
    <h1 class="text-center text-3xl font-semibold mb-6">Welcome to Team: <span class="text-blue-600 italic">{{$team->team_name}}</span></h1>

    <div class="shadow-lg rounded-lg overflow-hidden">
        <table class="min-w-full leading-normal bg-white">
            <thead class="bg-blue-600 text-white">
                <tr>
                    <th class="py-3 px-6">Goals For</th>
                    <th class="py-3 px-6">Goals Against</th>
                    <th class="py-3 px-6">Points</th>
                    <th class="py-3 px-6">Wins</th>
                    <th class="py-3 px-6">Losses</th>
                    <th class="py-3 px-6">Draws</th>
                    <th class="py-3 px-6">Matches Played</th>
                </tr>
            </thead>
            <tbody>
                <tr class="hover:bg-gray-100">
                    <td class="py-3 px-6 border-b">{{ $team->goals_for }}</td>
                    <td class="py-3 px-6 border-b">{{ $team->goals_against }}</td>
                    <td class="py-3 px-6 border-b">{{ $team->points }}</td>
                    <td class="py-3 px-6 border-b">{{ $team->wins }}</td>
                    <td class="py-3 px-6 border-b">{{ $team->losses }}</td>
                    <td class="py-3 px-6 border-b">{{ $team->draws }}</td>
                    <td class="py-3 px-6 border-b">{{ $team->matches_played }}</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>


@endsection
