@extends('layouts.league')

@section('title')
Match {{$match->match_id}}
@endsection

@section('content')

<div class="container mx-auto mt-8 px-4 h-screen">
    <h1 class="text-center text-3xl font-semibold mb-6">Welcome to Match number:
        <span class="text-blue-600 italic">{{$match->match_id}}</span>
    </h1>

    <div class="shadow-lg rounded-lg overflow-hidden mb-6">
        <table class="min-w-full leading-normal bg-white">
            <thead class="bg-blue-600 text-white">
                        <th class="py-3 px-6">Match Number</th>
                        <th class="py-3 px-6">Time</th>
                        <th class="py-3 px-6">Home team</th>
                        <th class="py-3 px-6">Away team</th>
                        <th class="py-3 px-6">Home team goals</th>
                        <th class="py-3 px-6">Away team goals</th>
                        <th class="py-3 px-6">Match result</th>
                        <th class="py-3 px-6">Status</th>
            </thead>
            <tbody>
                <tr class="hover:bg-gray-100 transition duration-300">
                <td class="py-3 px-6 border-b">{{ $match->match_id }}</td>
                <td class="py-3 px-6 border-b">{{ $match->time }}</td>
                <td class="py-3 px-6 border-b">{{ $match->homeTeam->team_name }} </td>
                <td class="py-3 px-6 border-b">{{ $match->awayTeam->team_name }} </td>
                <td class="py-3 px-6 border-b">{{ $match->home_team_goals }}</td>
                <td class="py-3 px-6 border-b">{{ $match->away_team_goals }}</td>
                <td class="py-3 px-6 border-b">{{ $match->match_result }}</td>
                <td class="py-3 px-6 border-b">{{ $match->status }}</td>
                </tr>
            </tbody>
        </table>
    </div>

    <div class="text-center">
        <!-- Edit Team Button -->
        <a href="{{route('matches.edit', $match)}}"
           class="inline-flex items-center bg-blue-600 text-white px-6 py-2 rounded hover:bg-blue-700 transition duration-300 mr-4">
           Edit Team
        </a>

        <!-- Delete Team Button -->
<form action="{{route('matches.destroy', $match)}}" method="POST" class="inline-block" onsubmit="return confirm('Are you sure you want to delete this team?');">
    @csrf
    @method('DELETE')
    <button type="submit" class="bg-red-600 text-white px-6 py-2 rounded hover:bg-red-700 transition duration-300">
        Delete
    </button>
</form>
</div>

@endsection
