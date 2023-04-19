<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableKnowledges extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('knowledges', function (Blueprint $table) {
            $table->increments('id');
            $table->string('knowledge_code', 5);
            $table->double('total_bobot');
            $table->double('total_similarity');
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
        Schema::dropIfExists('table_knowledges');
    }
}
