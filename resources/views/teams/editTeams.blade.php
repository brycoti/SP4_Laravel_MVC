@extends('layouts.league')

@section('content')

<div class="h-full">
    <div class="text-center mb-10 bg-blue-600 text-white p-4 rounded">
        <h1 class="text-white text-3xl font-semibold mb-4">Edit Team</h1>
        <p class="text-blue text-lg">Update a team</p>
    </div>
    
    <div class="w-full max-w-lg mx-auto bg-indigo-100 shadow-md rounded px-8 pt-6 pb-8">
        <form action="{{ route('teams.update', $team->team_id) }}" method="POST" class="bg-white p-8 rounded-lg shadow-md">
            @csrf
            @method('PUT')

            <div class="mb-6 bg-in">
                <label for="name" class="block text-lg font-medium text-blue-900 mb-2">Team name:</label>
                <input type="text" id="name" name="name" value="{{ $team->team_name }}" 
                       placeholder="Type the name of the team" 
                       class="mt-1 p-3 w-full border rounded-md border-blue-200 focus:border-blue-500 transition-all duration-300 focus:ring-2 focus:ring-blue-500 outline-none">
            </div>

            <div class="text-center">
                <button type="submit" class="bg-blue-500 text-white px-6 py-3 rounded hover:bg-blue-800 focus:bg-blue-700 active:shadow-inner transition-all duration-300 focus:outline-none focus:border-blue-700 focus:ring-2 focus:ring-blue-200">Update Team</button>
            </div>
        </form>
    </div>
</div>

@endsection

