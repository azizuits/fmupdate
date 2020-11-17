<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSubagentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('subagents', function (Blueprint $table) {
            $table->id();
            $table->string('code', 40);
            $table->string('name', 40);
            $table->string('mobile', 15);
            $table->string('address', 180);
            $table->string('division', 40);
            $table->string('district', 40);
            $table->string('postalcode', 40);
            $table->string('disagentcode', 40);
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
        Schema::dropIfExists('subagents');
    }
}
