<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCookiesTable extends Migration
{
    public function up()
    {
        Schema::create('cookies', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->integer('quantity');
            $table->date('production_date');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('cookies');
    }
}
