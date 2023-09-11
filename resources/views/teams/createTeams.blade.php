@extends('layouts.league')

@section('content')


<div class="container h-full">
    <span><h1>Here create a new team!</h1></span>

    <form action="{{route('teams.store')}}" method="POST">

        @csrf

        <label>
            Name:
            <br>
            <input type="name" name="name">
        </label>
        <br>
        <button type="submit">Create New Team</button>
    </form>
</div>

@endsection
