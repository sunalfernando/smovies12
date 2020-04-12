<?php namespace Sunal\Movies\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateSunalMoviesMoviesGenres extends Migration
{
    public function up()
    {
        Schema::rename('sunal_movies_movie_genres', 'sunal_movies_movies_genres');
    }
    
    public function down()
    {
        Schema::rename('sunal_movies_movies_genres', 'sunal_movies_movie_genres');
    }
}
