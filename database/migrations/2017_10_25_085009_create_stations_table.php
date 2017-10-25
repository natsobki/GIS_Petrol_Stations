<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stations', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();

            $table->decimal('latitude',9, 6);
            $table->decimal('longitude',9, 6);

            $table->string('name');
            $table->string('city');
            $table->string('street');

            $table->decimal('pb95', 3,2)->nullable();
            $table->decimal('pb98', 3,2)->nullable();
            $table->decimal('on', 3,2)->nullable();
            $table->decimal('lpg', 3,2)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('stations');
    }
}
