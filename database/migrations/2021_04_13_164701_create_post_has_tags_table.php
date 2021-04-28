<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostHasTagsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $tableNames = config('permission.table_names');
        Schema::create('post_has_tags', function (Blueprint $table) use ($tableNames) {
            $table -> unsignedBigInteger('post_id');
            $table -> unsignedBigInteger('tags_id');

            $table->foreign('post_id')
            ->references('id')
            ->on($tableNames['posts'])
            ->onDelete('cascade');

        $table->foreign('tags_id')
            ->references('id')
            ->on($tableNames['tags'])
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
        Schema::table('post_has_tags', function (Blueprint $table) {
            //
        });
    }
}
