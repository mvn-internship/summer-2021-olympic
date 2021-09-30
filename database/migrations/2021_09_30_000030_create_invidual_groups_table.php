<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInvidualGroupsTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'invidual_groups';

    /**
     * Run the migrations.
     * @table invidual_group
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->integer('individual_id')->unsigned();
            $table->integer('group_id')->unsigned();

            $table->index(["individual_id"], 'fk_invidual_group_individual1_idx');

            $table->index(["group_id"], 'fk_invidual_group_groups1_idx');


            $table->foreign('individual_id', 'fk_invidual_group_individual1_idx')
                ->references('id')->on('individuals')
                ->onDelete('no action')
                ->onUpdate('no action');

            $table->foreign('group_id', 'fk_invidual_group_groups1_idx')
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
        Schema::dropIfExists($this->tableName);
    }
}
