<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCashBonusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cash_bonuses', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->string('status')->default('Pending');
            $table->decimal('cash_bonus_amount', 10, 2);
            $table->string('sales_count');
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
        Schema::dropIfExists('cash_bonuses');
    }
}
