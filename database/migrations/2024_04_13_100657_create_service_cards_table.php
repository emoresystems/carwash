<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServiceCardsTable extends Migration
{
    public function up()
    {
        Schema::create('service_cards', function (Blueprint $table) {
            $table->id();
            $table->string('image_url');
            $table->string('heading');
            $table->text('description');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('service_cards');
    }
}
