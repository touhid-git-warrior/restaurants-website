<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFooterSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('footer_settings', function (Blueprint $table) {
            $table->id();
            $table->string('title_1');
            $table->string('title_2');
            $table->string('location');
            $table->string('phone');
            $table->string('email');
            $table->string('facebook');
            $table->string('twitter');
            $table->string('youtube');
            $table->string('linkin');
            $table->string('instagram');
            $table->string('title_3');
            $table->string('opening_day');
            $table->string('opening_time');
            $table->string('special_opening_day');
            $table->string('special_opening_time');
            $table->string('title_4');
            $table->string('newslatter_desc');
            $table->string('newslatter_btn');
            $table->string('copyright');
            $table->string('other_link_1')->nullable();
            $table->string('href_1')->nullable();
            $table->string('other_link_2')->nullable();
            $table->string('href_2')->nullable();
            $table->string('other_link_3')->nullable();
            $table->string('href_3')->nullable();
            $table->string('other_link_4')->nullable();
            $table->string('href_4')->nullable();
            $table->string('other_link_5')->nullable();
            $table->string('href_5')->nullable();
            $table->integer('status')->default(0);
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
        Schema::dropIfExists('footer_settings');
    }
}
