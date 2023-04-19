<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKnowledgeDetails extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('knowledge_details', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('knowledge_id')->unsigned();
            $table->integer('atribut_id')->unsigned();
            $table->integer('gejala_id')->unsigned();
            $table->foreign('knowledge_id')->on('knowledges')->references('id');
            $table->foreign('atribut_id')->on('atributs')->references('id_atribut');
            $table->foreign('gejala_id')->on('gejalas')->references('id_gejala');
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
        Schema::dropIfExists('knowledge_details');
    }
}
