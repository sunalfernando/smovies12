<?php namespace Sunal\Movies\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateSunalMovies extends Migration
{
    public function up()
    {
        Schema::create('sunal_movies_', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('name');
            $table->text('description')->nullable();
            $table->string('year');
            $table->string('slug');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('sunal_movies_');
    }
}
