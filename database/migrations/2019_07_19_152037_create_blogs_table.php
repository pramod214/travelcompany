<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBlogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blogs', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('user_id');
            $table->string('title');
            $table->string('image');
            $table->text('shortDescription')->nullable()->default(null);
            $table->text('content');
            $table->string('tags')->nullable()->default(null);
            $table->string('date')->nullable();
            $table->string('blog_facebook')->nullable();
            $table->string('blog_twitter')->nullable();
            $table->string('blog_linkedin')->nullable();
            $table->string('quote')->nullable();
            $table->string('showinhome')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('blogs');
    }
}
