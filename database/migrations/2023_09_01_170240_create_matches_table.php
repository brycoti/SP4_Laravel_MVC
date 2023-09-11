<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMatchesTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('matches', function (Blueprint $table) {
            $table->increments('match_id');
            $table->dateTime('time')->nullable();
            $table->unsignedInteger('id_home_team');
            $table->unsignedInteger('id_away_team');
            $table->integer('home_team_goals')->default(0);
            $table->integer('away_team_goals')->default(0);
            $table->enum('match_result', ['Home Team Win', 'Away Team Win', 'Draw'])->nullable();
            $table->enum('Status', ['Scheduled', 'In Progress', 'Finished'])->default('Scheduled');
            $table->timestamp('deleted_at')->nullable();

            $table->foreign('id_home_team')->references('team_id')->on('teams')->onDelete('restrict')->onUpdate('cascade');
            $table->foreign('id_away_team')->references('team_id')->on('teams')->onDelete('restrict')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('matches');
    }
}