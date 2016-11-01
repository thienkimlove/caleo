<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddMoreFieldsToProducts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('products', function (Blueprint $table) {
            $table->text('congdung')->nullable();
            $table->string('xuatxu')->nullable();
            $table->string('giayphep')->nullable();
            $table->string('quycach')->nullable();
            $table->string('tinhtrang')->nullable();
            $table->string('giacu')->nullable();
            $table->string('giamoi')->nullable();
            $table->boolean('hot_index')->default(false);
            $table->boolean('hot_below')->default(false);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('products', function (Blueprint $table) {
            $table->dropColumn([
                'congdung',
                'xuatxu',
                'giayphep',
                'quycach',
                'tinhtrang',
                'giacu',
                'giamoi',
                'hot_index',
                'hot_below',
            ]);
        });
    }
}
