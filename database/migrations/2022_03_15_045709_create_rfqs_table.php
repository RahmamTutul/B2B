<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRfqsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rfqs', function (Blueprint $table) {
            $table->id();
            $table->string("industry_name")->nullable();
            $table->string("want_buy")->nullable();
            $table->string("keywords")->nullable();
            $table->string("details")->nullable();
            $table->string("qty")->nullable();
            $table->string("unit")->nullable();
            $table->string("frequency")->nullable();
            $table->string("image")->nullable();
            $table->string("name")->nullable();
            $table->string("email")->nullable();
            $table->string("phone")->nullable();
            $table->json("p_methods")->nullable();
            $table->string("port")->nullable();
            $table->string("validity")->nullable();
            $table->tinyInteger("t_c");
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
        Schema::dropIfExists('rfqs');
    }
}
