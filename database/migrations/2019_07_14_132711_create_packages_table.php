<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePackagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('packages', function (Blueprint $table) {
            $table->Increments('id');
            $table->string('title')->nullable();
            $table->text('shortDescription')->nullable();
            $table->text('content')->nullable();
            $table->string('duration')->nullable();
            $table->string('price')->nullable();
            $table->string('returnDate')->nullable();
            $table->string('departureDate')->nullable();
            $table->string('noofpeople')->nullable();
            $table->string('location')->nullable();
            $table->unsignedInteger('category_id');
            $table->text('itineraries')->nullable();
            $table->string('discount')->nullable();
            $table->string('image')->nullable()->default(null);
            $table->string('showinhome')->default(0);
            $table->foreign('category_id')->references('id')->on('package_categories');
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
        Schema::dropIfExists('packages');
    }
}
