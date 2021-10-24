<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGroupPointTotalTable extends Migration
{
    public $tableName = 'group_point_total';
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->integer('point')->nullable();
            $table->unsignedInteger('team_id');
            $table->unsignedInteger('group_id');

            $table->foreign('team_id')
                ->references('id')->on('teams')
                ->onDelete('no action')
                ->onUpdate('no action');

            $table->foreign('group_id')
                ->references('id')->on('groups')
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
        Schema::dropIfExists('group_point_total');
    }
}
