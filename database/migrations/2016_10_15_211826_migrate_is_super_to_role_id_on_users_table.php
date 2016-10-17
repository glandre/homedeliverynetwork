<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class MigrateIsSuperToRoleIdOnUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $this->addNullableRoleId();

        $this->migrateIsSuperToRoleId();

        $this->dropIsSuperAndRestrictNullsOnRoleId();
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        $this->addIsSuper();

        $this->migrateRoleIdToIsSuper();

        $this->dropRoleId();
    }

    private function addNullableRoleId()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->integer('role_id')->unsigned()->nullable();
            $table->foreign('role_id')->references('id')->on('roles');
        });
    }

    private function migrateIsSuperToRoleId()
    {
        DB::table('users')->where('is_super', true)->update(['role_id' => 1]);
        DB::table('users')->where('is_super', false)->update(['role_id' => 8]);
    }

    private function dropIsSuperAndRestrictNullsOnRoleId()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('is_super');
            $table->integer('role_id')->unsigned()->default(8)->change();
        });
    }

    private function addIsSuper()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->boolean('is_super')->default(false);
        });
    }

    private function migrateRoleIdToIsSuper()
    {
        DB::table('users')->where('role_id', 1)->update(['is_super' => true]);
    }

    private function dropRoleId()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('role_id');
        });
    }
}
