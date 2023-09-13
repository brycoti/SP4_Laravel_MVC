@extends('layouts.league')

@section('content')

<div class="container mx-auto mt-20 p-6 bg-blue-100 rounded-lg">
    <div class="text-center mb-10">
        <h1 class="text-blue-800 text-3xl font-semibold mb-2">Edit Team</h1>
        <p class="text-blue-600">Update a team</p>
    </div>
    
    <div class="w-full max-w-md mx-auto">
        <form action="{{ route('teams.update', $team->team_id) }}" method="POST" class="bg-white p-6 rounded-lg shadow-md">
            @csrf
            @method('PUT')

            <div class="mb-4">
                <label for="name" class="block text-sm font-medium text-blue-700 mb-2">Team name:</label>
                <input type="text" id="name" name="name" value="{{ $team->team_name }}" 
                       placeholder="Type the name of the team" 
                       class="mt-1 p-2 w-full border rounded-md border-blue-300 focus:border-blue-500 focus:ring-1 focus:ring-blue-500">
            </div>

            <div class="text-center">
                <button type="submit" class="bg-blue-500 text-white px-6 py-2 rounded hover:bg-blue-600 active:bg-blue-700 focus:outline-none focus:border-blue-700 focus:ring focus:ring-blue-200">Update Team</button>
            </div>
        </form>
    </div>
</div>

@endsection
