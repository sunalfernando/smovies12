<?php namespace Sunal\Movies\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateSunalMoviesMoviesGenres extends Migration
{
    public function up()
    {
        Schema::create('sunal_movies_movies_genres', function($table)
        {
            $table->engine = 'InnoDB';
            $table->integer('movie_id');
            $table->integer('genre_id');
            $table->primary(['movie_id','genre_id']);
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('sunal_movies_movies_genres');
    }
}
