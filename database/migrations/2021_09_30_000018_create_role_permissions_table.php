<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRolePermissionsTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'role_permissons';

    /**
     * Run the migrations.
     * @table role_permission
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->integer('permisson_id')->unsigned();
            $table->integer('role_id')->unsigned();

            $table->index(["permisson_id"], 'fk_roles_permissions_permissons1_idx');

            $table->index(["role_id"], 'fk_roles_permissions_roles1_idx');


            $table->foreign('permisson_id', 'fk_roles_permissions_permissons1_idx')
                ->references('id')->on('permissons')
                ->onDelete('no action')
                ->onUpdate('no action');

            $table->foreign('role_id', 'fk_roles_permissions_roles1_idx')
                ->references('id')->on('roles')
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
