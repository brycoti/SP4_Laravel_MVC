@extends('layouts.league')

@section('title')
    Index Teams
@endsection

@section('content')
    <div class="container mx-auto p-6">
        <div class="bg-blue-500 text-white p-8 rounded-md shadow-lg mb-6">
            <h1 class="text-3xl font-bold mb-4">Index Teams</h1>
            <p class="text-xl font-bold mb-4">Select the desired team from the list by clicking on its name. Once highlighted, click on it to view more detailed information. </h1>
        </p>


        <div class="shadow-lg rounded-lg overflow-hidden bg-white">
            <table class="min-w-full leading-normal">
                <thead class="bg-blue-600 text-white">
                    <tr>
                        <th class="py-3 px-6">Position</th>
                        <th class="py-3 px-6">Team Name</th>
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
                    @foreach ($teams as $team)
                    <tr class="hover:bg-gray-100">
                        <td class="text-center py-3 px-6 border-b">{{ 1 + $loop->index}}</td>
                        <td class="text-center py-3 px-6 border-b"><a href="{{ route('teams.show', $team->team_id) }}" class="text-blue-600 hover:underline">{{ $team->team_name }}</a></td>
                        <td class="text-center py-3 px-6 border-b">{{ $team->points }}</td>
                        <td class="text-center py-3 px-6 border-b">{{ $team->goals_for }}</td>
                        <td class="text-center py-3 px-6 border-b">{{ $team->goals_against }}</td>
                        <td class="text-center py-3 px-6 border-b">{{ $team->wins }}</td>
                        <td class="text-center py-3 px-6 border-b">{{ $team->losses }}</td>
                        <td class="text-center py-3 px-6 border-b">{{ $team->draws }}</td>
                        <td class="text-center py-3 px-6 border-b">{{ $team->matches_played }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <div class="p-4">
                {{$teams->links()}}
            </div>
        </div>
    </div>
@endsection

