<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePoliciesAndRolesTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $this->createRolesTable();

        $this->insertRoles();

        $this->createPoliciesTable();

        $this->createPolicyRoleTable();
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {

        Schema::dropIfExists('policy_role');

        Schema::dropIfExists('policies');

        Schema::dropIfExists('roles');
    }

    private function createRolesTable()
    {
        Schema::create('roles', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('description')->nullable();
            $table->timestamps();
        });
    }

    private function insertRoles()
    {
        DB::table('roles')->insert([
            'id' => 1,
            'name' => 'Super',
            'description' => 'Super Administrator: Full control of the application (the only one who can manage users)'
        ]);

        DB::table('roles')->insert([
            'id' => 2,
            'name' => 'Webmaster',
            'description' => 'Can view entire system but cannot change any data'
        ]);

        DB::table('roles')->insert([
            'id' => 3,
            'name' => 'Admin',
            'description' => 'System Administrator: Manages products, customers, inventories, orders'
        ]);

        DB::table('roles')->insert([
            'id' => 4,
            'name' => 'Fullment',
            'description' => 'Fullment Manager: Manages customers, inventories, orders'
        ]);

        DB::table('roles')->insert([
            'id' => 5,
            'name' => 'Writer',
            'description' => 'Manages products information'
        ]);

        DB::table('roles')->insert([
            'id' => 6,
            'name' => 'Shipper',
            'description' => 'Manages orders information'
        ]);

        DB::table('roles')->insert([
            'id' => 7,
            'name' => 'Marketing',
            'description' => 'Manages products, customers, and orders information'
        ]);

        DB::table('roles')->insert([
            'id' => 8,
            'name' => 'Customer',
            'description' => 'Can access the Shop Engine Website'
        ]);
    }

    private function createPoliciesTable()
    {
        Schema::create('policies', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('description')->nullable();
            $table->timestamps();
        });
    }

    private function createPolicyRoleTable()
    {
        Schema::create('policy_role', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('policy_id')->unsigned();
            $table->foreign('policy_id')->references('id')->on('policies');
            $table->integer('role_id')->unsigned();
            $table->foreign('role_id')->references('id')->on('roles');
        });
    }
}
