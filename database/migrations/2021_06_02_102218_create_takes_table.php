<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTakesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('takes', function (Blueprint $table) {
            $table->id();
            $table->string('id_product');
            
            $table->integer('qty');
            $table->timestamps();

            });

        // Schema::create('takes', function (Blueprint $table){
        //     $table->foreign('id_product')
        //     ->references('id')
        //     ->on('products')
        //     ->onUpdate('cascade')
        //     ->onDelete('cascade');
        
        // });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('takes');
    }
}
