@extends('layouts.league')

@section('title')
    Index Matches
@endsection

@section('content')
    <div class="container mx-auto p-6">
        <div class="bg-blue-500 text-white p-8 rounded-md shadow-lg mb-6">
            <h1 class="text-3xl font-bold mb-4">Index Matches</h1>
            <p class="text-xl font-bold mb-4">Select the desired match from the list by clicking on its name. Once highlighted, click on it to view more detailed information. </h1>
        </p>
            

        <div class="shadow-lg rounded-lg overflow-hidden bg-white">
            <table class="min-w-full leading-normal">
                <thead class="bg-blue-600 text-white">
                    <tr>
                        <th class="py-3 px-6">Match number</th>
                        <th class="py-3 px-6">Time</th>
                        <th class="py-3 px-6">Home team</th>
                        <th class="py-3 px-6">away team</th>
                        <th class="py-3 px-6">Home team goals</th>
                        <th class="py-3 px-6">awat team goals</th>
                        <th class="py-3 px-6">Match result</th>
                        <th class="py-3 px-6">Status</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($matches as $match)
                    <tr class="hover:bg-gray-100">
                        <td class="py-3 px-6 border-b"><a href="{{ route('matches.show', $match->match_id) }}" class="text-blue-600 hover:underline">{{ $match->match_id }}</a></td>
                        <td class="py-3 px-6 border-b">{{ $match->time }}</td>
                        <td class="py-3 px-6 border-b">{{ $match->id_home_team }}</td>
                        <td class="py-3 px-6 border-b">{{ $match->id_away_team }}</td>
                        <td class="py-3 px-6 border-b">{{ $match->home_team_goals }}</td>
                        <td class="py-3 px-6 border-b">{{ $match->away_team_goals }}</td>
                        <td class="py-3 px-6 border-b">{{ $match->match_result }}</td>
                        <td class="py-3 px-6 border-b">{{ $match->Status }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <div class="p-4">
                {{$matches->links()}}
            </div>
        </div>
    </div>
@endsection

