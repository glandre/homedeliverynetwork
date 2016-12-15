<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddMorePicturesToProducts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('products', function (Blueprint $table) {
            $table->string('picture_two', 255)->nullable()->comment('Picture path in the system storage');
            $table->string('picture_three', 255)->nullable()->comment('Picture path in the system storage');
            $table->string('picture_four', 255)->nullable()->comment('Picture path in the system storage');
            $table->string('picture_five', 255)->nullable()->comment('Picture path in the system storage');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        $table->dropColumn('picture_two');
        $table->dropColumn('picture_three');
        $table->dropColumn('picture_four');
        $table->dropColumn('picture_five');
    }
}
