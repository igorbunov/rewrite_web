<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateActivationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('activations', function (Blueprint $table) {
            $table->increments('id');
            $table->string('order_id')->default('');
            $table->string('key')->default('');
            $table->float('amount')->default(0);
            $table->tinyInteger('is_payed')->default(0);
            $table->string('payment_id')->default("");
            $table->string('currency')->default('UAH');
            $table->text('response');
            $table->text('message');
            $table->timestamps();

            $table->charset = 'utf8';
            $table->collation = 'utf8_general_ci';
            $table->engine = 'InnoDB';
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('activations');
    }
}
