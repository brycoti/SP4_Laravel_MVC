@extends('layouts.league')

@section('content')
<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

        <!-- Heading -->
        <div class="bg-blue-600 text-white p-6 mb-6 rounded focus:outline-none">
            <h1 class="text-2xl font-semibold text-center">Here you can create your New Team!</h1>
        </div>

        <!-- Team Creation Form -->
        <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg flex items-center justify-center">
            <form action="{{ route('teams.store') }}" method="POST" class="max-w-xl">
                @csrf

                <!-- Team Name Input -->
                <div class="mb-6 inline-block items-center">
                    <label for="name" class="block text-3xl text-black-600 mb-4 text-center">
                        Name:
                    </label>
                    <input
                        type="text"
                        name="name"
                        id="name"
                        class=" text-center shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md"
                        placeholder="Enter team name">
                </div>

                <!-- Submit Button -->
                <div class="px-4 mt-12 block items-center">
                    <button
                        type="submit"
                        class="inline-flex px-4 py-2 border border-transparent text-sm font-medium rounded-md shadow-sm text-white bg-indigo-600 hover:bg-indigo-800 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 transition duration-150 ease-in-out">
                        Create New Team
                    </button>
                </div>
            </form>
        </div>


    </div>
</div>
@endsection
