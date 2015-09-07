<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRecipesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('recipes', function($table)
        {
            $table->increments('id')->unsigned();
            $table->integer('user_id')->nullable()->unsigned();        //author
            $table->string('name')->nullable();
            $table->text('description')->nullable();
            $table->string('source')->nullable();
            $table->string('source_url')->nullable();
            $table->text('notes')->nullable();
            $table->bigInteger('prep_time')->default(0)->unsigned();   //seconds
            $table->bigInteger('cook_time')->default(0)->unsigned();   //seconds
            $table->integer('servings')->unsigned()->nullable();       //how many servings
            $table->string('serving_size')->nullable();                //what size the serving is (people, cups, etc)

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
        Schema::dropIfExists('recipes');
    }
}
