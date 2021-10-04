<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrganizationTournamentsTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'organization_tournaments';

    /**
     * Run the migrations.
     * @table organization_tournament
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->integer('tournament_id')->unsigned()->nullable();
            $table->integer('teams_id')->unsigned();

            $table->index(["tournament_id"], 'fk_organization_tournament_tournaments1_idx');

            $table->index(["teams_id"], 'fk_organization_tournament_teams1_idx');


            $table->foreign('tournament_id', 'fk_organization_tournament_tournaments1_idx')
                ->references('id')->on('tournaments')
                ->onDelete('no action')
                ->onUpdate('no action');

            $table->foreign('teams_id', 'fk_organization_tournament_teams1_idx')
                ->references('id')->on('teams')
                ->onDelete('no action')
                ->onUpdate('no action');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists($this->tableName);
    }
}
