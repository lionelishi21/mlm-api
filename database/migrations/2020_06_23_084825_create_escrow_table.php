<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEscrowTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('escrow', function (Blueprint $table) {
            $table->id();
            $table->string('tier');
            $table->decimal('pf', 10, 2);
            $table->integer('user_id');
            $table->integer('sales'); //12, 36,
            $table->decimal('cash_bonus', 10, 2);
            $table->decimal('amount_recieved', 10, 2);
            $table->decimal('escrow', 10, 2);
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
        Schema::dropIfExists('escrow');
    }
}
