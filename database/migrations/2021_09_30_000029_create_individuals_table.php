<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateIndividualsTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'individuals';

    /**
     * Run the migrations.
     * @table individual
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->integer('rank_id')->unsigned()->nullable();
            $table->integer('competition_type_id')->unsigned()->nullable();
            $table->integer('tournament_id')->unsigned();

            $table->index(["rank_id"], 'fk_individual_sport_ranks1_idx');

            $table->index(["competition_type_id"], 'fk_individual_sport_competition_types1_idx');

            $table->index(["tournament_id"], 'fk_individual_sport_tournaments1_idx');


            $table->foreign('rank_id', 'fk_individual_sport_ranks1_idx')
                ->references('id')->on('ranks')
                ->onDelete('no action')
                ->onUpdate('no action');

            $table->foreign('competition_type_id', 'fk_individual_sport_competition_types1_idx')
                ->references('id')->on('competition_types')
                ->onDelete('no action')
                ->onUpdate('no action');

            $table->foreign('tournament_id', 'fk_individual_sport_tournaments1_idx')
                ->references('id')->on('tournaments')
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
