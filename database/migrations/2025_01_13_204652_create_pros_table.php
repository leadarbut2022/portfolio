<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pros', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->nullable();
            $table->string('des')->nullable();
            $table->string('img1')->nullable();
            $table->string('img2')->nullable();
            $table->string('playstore')->nullable();
            $table->string('playstore_icon')->default('<i class="fa-brands fa-google-play"></i>');
            $table->boolean('playstore_stat')->default(0);
            $table->string('appstore')->nullable();
            $table->string('appstore_icon')->default('<i class="fa-brands fa-app-store-ios"></i>');
            $table->boolean('appstore_stat')->default(0);
            $table->string('github')->nullable();
            $table->string('github_icon')->default('<i class="fa-brands fa-github"></i>');
            $table->boolean('github_stat')->default(0);
            $table->string('demo')->nullable();
            $table->string('demo_icon')->default('<i class="fa-solid fa-desktop"></i>');
            $table->boolean('demo_stat')->default(0);

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
        Schema::drop('pros');
    }
}
