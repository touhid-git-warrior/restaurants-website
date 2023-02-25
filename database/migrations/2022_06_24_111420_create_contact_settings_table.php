<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContactSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contact_settings', function (Blueprint $table) {
            $table->id();
            $table->string('mini_title');
            $table->string('title');
            $table->string('header_title_1');
            $table->string('header_info_1');
            $table->string('header_title_2');
            $table->string('header_info_2');
            $table->string('header_title_3');
            $table->string('header_info_3');
            $table->text('google_map');
            $table->string('button_name');
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
        Schema::dropIfExists('contact_settings');
    }
}
