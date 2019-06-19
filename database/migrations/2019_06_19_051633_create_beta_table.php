<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBetaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('beta', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('merek', 50);
            $table->enum('tipe', ['laptop', 'komputer']);
            $table->string('pembuat', 100);
            $table->double('harga');
            $table->integer('stok');
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
        Schema::dropIfExists('beta');
    }
}
