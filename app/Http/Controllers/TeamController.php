<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TeamController extends Controller
{
    public function index()
    {
        return "Aquí va el CRUD de equipos de fútbol";
    }

    public function create()
    {
        return "Aquí va el create de equipos de fútbol";
    }

    public function show($id)
    {
        return "Aquí se muestra el equipo de fútbol con ID: $id";
    }

    public function edit($id)
    {
        return "Aquí se edita el equipo de fútbol con ID: $id";
    }

    public function destroy($id)
    {
        return "Aquí se elimina el equipo de fútbol con ID: $id";
    }
}
