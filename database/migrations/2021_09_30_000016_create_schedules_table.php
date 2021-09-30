<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSchedulesTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'schedules';

    /**
     * Run the migrations.
     * @table schedules
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('name', 45)->nullable();
            $table->date('date')->nullable();
            $table->string('start_time', 45)->nullable();
            $table->string('end_time', 45)->nullable();
            $table->integer('match_id')->unsigned()->nullable();
            $table->integer('place_id')->unsigned()->nullable();

            $table->index(["match_id"], 'fk_schedules_matches1_idx');

            $table->index(["place_id"], 'fk_schedules_places1_idx');


            $table->foreign('match_id', 'fk_schedules_matches1_idx')
                ->references('id')->on('matches')
                ->onDelete('no action')
                ->onUpdate('no action');

            $table->foreign('place_id', 'fk_schedules_places1_idx')
                ->references('id')->on('places')
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
