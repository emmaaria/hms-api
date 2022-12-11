<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNagadTransactionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nagad_transactions', function (Blueprint $table) {
            $table->id();
            $table->string('transaction_id');
            $table->string('reference_no')->nullable();
            $table->string('comment')->nullable();
            $table->string('type');
            $table->string('withdraw')->default(0);
            $table->string('deposit')->default(0);
            $table->string('company_id')->nullable();
            $table->string('date');
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
        Schema::dropIfExists('nagad_transactions');
    }
}