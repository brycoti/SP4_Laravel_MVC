@extends('layouts.league')

@section('title')
Create New Team
@endsection

@section('content')
<div class="py-12 h-full">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

        <div class="bg-blue-600 text-white p-6 mb-6 rounded focus:outline-none">
            <h1 class="text-2xl font-semibold text-center">Here you can create your New Team!</h1>
        </div>

        <div class="p-4 sm:p-8 mb-6 bg-blue-100 shadow sm:rounded-lg flex items-center justify-center">
            <form action="{{ route('teams.store') }}" method="POST" class="max-w-xl">
                @csrf

                <div class="mb-6 bg-w">
                    <label for="name" class="block text-3xl text-black-600 mb-4 text-center">
                        Name:
                        <br><br>
                        <input
                        type="text"
                        name="team_name"
                        id="name"
                        value="{{ old('team_name') }}"
                        class="text-center shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md"
                        placeholder="Enter team name">
                    </label>

                    @error('team_name')
                        <br>
                            <small>*{{$message}}</small>
                        <br>
                    @enderror           
                    
                </div>

                <div class="px-4 mt-12">
                    <button
                        type="submit"
                        class=" text-xl inline-flex px-4 py-2 border border-transparent text-sm font-medium rounded-md shadow-sm text-white bg-indigo-600 hover:bg-indigo-800 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 transition duration-150 ease-in-out">
                        Create New Team
                    </button>
                </div>
            </form>
        </div>

    </div>
</div>
@endsection
