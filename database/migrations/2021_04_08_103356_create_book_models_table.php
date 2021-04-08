<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBookModelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('book_models', function (Blueprint $table) {
            $table->id();
            $table->string("Btitle");
            $table->string("Bauthor");
            $table->string("Bdes");
            $table->string("Bdis");
            $table->string("Bprice");
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
        Schema::dropIfExists('book_models');
    }
}
