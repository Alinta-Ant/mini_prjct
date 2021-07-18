<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductmodelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('productmodels', function (Blueprint $table) {
            $table->id();
            $table->string("librarybookId");
            $table->string("librarybookName");
            $table->string("librarybookCategory");
            $table->string("librarybookPrice");
            $table->string("librarybookDescription");
            $table->mediumText("pimage")->nullable();
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
        Schema::dropIfExists('productmodels');
    }
}
