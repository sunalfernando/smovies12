<?php namespace Sunal\Movies\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateSunalMoviesGenres extends Migration
{
    public function up()
    {
        Schema::create('sunal_movies_genres', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('genre_title');
            $table->string('slug');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('sunal_movies_genres');
    }
}
