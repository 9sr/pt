<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('categories', function (Blueprint $table) {
            $table->string('image')->nullable()->after('slug');
            $table->boolean('movie_meta')->default(0)->after('meta');
            $table->boolean('tv_meta')->default(0)->after('meta');
            $table->boolean('game_meta')->default(0)->after('meta');
            $table->boolean('music_meta')->default(0)->after('meta');
            $table->boolean('no_meta')->default(0)->after('meta');
            $table->dropColumn('meta');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
