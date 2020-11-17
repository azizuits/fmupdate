<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSendingTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sending', function (Blueprint $table) {
            $table->id();
            $table->string('orderid', 40);
            $table->string('code', 40);
            $table->string('frompostalcode', 40);
            $table->string('mycode', 40);

            $table->string('address', 400);
            $table->string('sendpostalcode', 40);
            $table->string('division', 40);
            $table->string('district', 40);


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
        Schema::dropIfExists('sending');
    }
}
