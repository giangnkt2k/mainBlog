<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostHasCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $tableNames = config('permission.table_names');
        Schema::create('post_has_categories', function (Blueprint $table) use ($tableNames) {
            $table -> unsignedBigInteger('post_id');
            $table -> unsignedBigInteger('categories_id');

            $table->foreign('post_id')
            ->references('id')
            ->on($tableNames['posts'])
            ->onDelete('cascade');

        $table->foreign('categories_id')
            ->references('id')
            ->on($tableNames['categories'])
            ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('post_has_categories', function (Blueprint $table) {
            //
        });
    }
}
